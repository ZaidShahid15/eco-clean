<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$siteBase = 'https://eco-clean.at';

$missingUrls = [
    'https://eco-clean.at/fenikss-lv-online-k-das-akcijas-pieejamas-ilgtermi-a-sp-l-t-jiem/',
    'https://eco-clean.at/gallery/',
    'https://eco-clean.at/gallery/gallery-6/',
    'https://eco-clean.at/gallery/gallery-5/',
    'https://eco-clean.at/gallery/gallery-4/',
    'https://eco-clean.at/gallery/gallery-3/',
    'https://eco-clean.at/gallery/gallery-2/',
    'https://eco-clean.at/gallery/gallery-1/',
    'https://eco-clean.at/category/uncategorized/',
    'https://eco-clean.at/category/apartment-cleaning/',
    'https://eco-clean.at/category/carpet-cleaning/',
    'https://eco-clean.at/category/commercial-cleaning/',
    'https://eco-clean.at/category/house-cleaning/',
];

function ensureDir(string $path): void
{
    if (! is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

function writeFile(string $path, string $content): void
{
    ensureDir(dirname($path));
    file_put_contents($path, $content);
}

function fetchUrl(string $url): string
{
    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 20,
        CURLOPT_TIMEOUT => 90,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; EcoCleanClone/1.1)',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_ENCODING => '',
    ]);

    $body = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    if ($body === false || $status >= 400) {
        throw new RuntimeException("Failed to fetch {$url} [{$status}] {$error}");
    }

    return (string) $body;
}

function cleanText(?string $text): string
{
    $text = $text ?? '';
    $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

    return trim($text);
}

function assetRelativePath(string $url): ?string
{
    $parts = parse_url($url);

    if (! isset($parts['host'], $parts['path'])) {
        return null;
    }

    $path = ltrim($parts['path'], '/');

    if ($path === '') {
        return null;
    }

    return 'assets/mirror/' . $parts['host'] . '/' . $path;
}

function pageUrlToPath(string $url): string
{
    $path = parse_url($url, PHP_URL_PATH) ?: '/';
    $path = trim($path, '/');

    return $path === '' ? '/' : '/' . $path . '/';
}

function pageSlug(string $url): string
{
    $path = trim((string) parse_url($url, PHP_URL_PATH), '/');

    return $path === '' ? 'home' : str_replace('/', '.', $path);
}

function viewInfo(string $url): array
{
    $path = trim((string) parse_url($url, PHP_URL_PATH), '/');
    $segments = $path === '' ? [] : explode('/', $path);
    $slug = end($segments) ?: 'home';

    if (($segments[0] ?? '') === 'gallery') {
        if (count($segments) === 1) {
            return [
                'view' => 'pages.gallery.index',
                'file' => 'resources/views/pages/gallery/index.blade.php',
                'route' => 'gallery.index',
                'uri' => '/gallery/',
            ];
        }

        return [
            'view' => "pages.gallery.{$slug}",
            'file' => "resources/views/pages/gallery/{$slug}.blade.php",
            'route' => "gallery.{$slug}",
            'uri' => "/gallery/{$slug}/",
        ];
    }

    if (($segments[0] ?? '') === 'category') {
        return [
            'view' => "pages.categories.{$slug}",
            'file' => "resources/views/pages/categories/{$slug}.blade.php",
            'route' => "categories.{$slug}",
            'uri' => "/category/{$slug}/",
        ];
    }

    return [
        'view' => "pages.blog.{$slug}",
        'file' => "resources/views/pages/blog/{$slug}.blade.php",
        'route' => "blog.{$slug}",
        'uri' => '/' . $slug . '/',
    ];
}

function extractMeta(string $html): array
{
    $title = '';
    if (preg_match('/<title>(.*?)<\/title>/is', $html, $matches)) {
        $title = cleanText($matches[1]);
    }

    $findMeta = static function (string $name) use ($html): string {
        if (preg_match('/<meta[^>]+(?:name|property)=["\']' . preg_quote($name, '/') . '["\'][^>]+content=["\'](.*?)["\']/is', $html, $m)) {
            return cleanText($m[1]);
        }

        return '';
    };

    $canonical = '';
    if (preg_match('/<link[^>]+rel=["\']canonical["\'][^>]+href=["\'](.*?)["\']/is', $html, $m)) {
        $canonical = cleanText($m[1]);
    }

    preg_match_all('/<script type="application\/ld\+json"[^>]*>(.*?)<\/script>/is', $html, $schemaMatches);

    $bodyClass = '';
    if (preg_match('/<body[^>]+class=["\'](.*?)["\']/is', $html, $bodyMatch)) {
        $bodyClass = cleanText($bodyMatch[1]);
    }

    preg_match_all('/<link[^>]+href=["\'](.*?)["\'][^>]*>/is', $html, $linkMatches);
    $pageStyles = [];
    foreach ($linkMatches[1] ?? [] as $href) {
        $href = html_entity_decode($href, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        if (str_contains($href, '/wp-content/uploads/elementor/css/post-')) {
            $pageStyles[] = $href;
        }
    }

    return [
        'title' => $title,
        'description' => $findMeta('description'),
        'robots' => $findMeta('robots'),
        'canonical' => $canonical,
        'og_title' => $findMeta('og:title'),
        'og_description' => $findMeta('og:description'),
        'og_image' => $findMeta('og:image'),
        'twitter_title' => $findMeta('twitter:title'),
        'twitter_description' => $findMeta('twitter:description'),
        'schema' => $schemaMatches[1] ?? [],
        'body_class' => $bodyClass,
        'page_styles' => array_values(array_unique($pageStyles)),
    ];
}

function findUrls(string $content): array
{
    $urls = [];

    preg_match_all('/(?:href|src)=["\']([^"\']+)["\']/i', $content, $matches);
    foreach ($matches[1] as $url) {
        $urls[] = html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    preg_match_all('/srcset=["\']([^"\']+)["\']/i', $content, $srcsetMatches);
    foreach ($srcsetMatches[1] as $srcset) {
        $parts = explode(',', $srcset);
        foreach ($parts as $candidate) {
            $segments = preg_split('/\s+/', trim($candidate));
            if (! empty($segments[0])) {
                $urls[] = html_entity_decode($segments[0], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }
        }
    }

    preg_match_all('/url\((["\']?)(.*?)\1\)/i', $content, $urlMatches);
    foreach ($urlMatches[2] as $url) {
        $urls[] = html_entity_decode(trim($url), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    return array_values(array_unique(array_filter($urls)));
}

function normalizeUrl(string $url, string $base): ?string
{
    if ($url === '' || str_starts_with($url, 'data:') || str_starts_with($url, 'mailto:') || str_starts_with($url, 'tel:') || str_starts_with($url, '#')) {
        return null;
    }

    if (str_starts_with($url, '//')) {
        return 'https:' . $url;
    }

    if (preg_match('/^https?:\/\//i', $url)) {
        return $url;
    }

    if (str_starts_with($url, '/')) {
        $parts = parse_url($base);
        if (! isset($parts['scheme'], $parts['host'])) {
            return null;
        }

        return $parts['scheme'] . '://' . $parts['host'] . $url;
    }

    $parts = parse_url($base);
    if (! isset($parts['scheme'], $parts['host'])) {
        return null;
    }

    $path = $parts['path'] ?? '/';
    $dir = rtrim(str_replace('\\', '/', dirname($path)), '/');

    return $parts['scheme'] . '://' . $parts['host'] . ($dir === '' ? '' : $dir) . '/' . ltrim($url, '/');
}

function shouldDownload(string $url, string $siteBase): bool
{
    $host = parse_url($url, PHP_URL_HOST) ?: '';
    $siteHost = parse_url($siteBase, PHP_URL_HOST) ?: '';

    if ($host !== $siteHost) {
        return false;
    }

    $path = parse_url($url, PHP_URL_PATH) ?: '';

    return $path !== '' && ! str_ends_with($path, '/');
}

function downloadAsset(string $url, string $root): void
{
    $relative = assetRelativePath($url);
    if ($relative === null) {
        return;
    }

    $target = $root . '/public/' . $relative;
    if (is_file($target)) {
        return;
    }

    try {
        $body = fetchUrl($url);
    } catch (Throwable) {
        return;
    }

    writeFile($target, $body);
}

function rewriteHtml(string $html, string $siteBase): string
{
    $siteHost = parse_url($siteBase, PHP_URL_HOST);

    $html = preg_replace_callback(
        '/https?:\/\/' . preg_quote((string) $siteHost, '/') . '([^\s"\')<]+)/i',
        static function (array $matches) {
            $full = $matches[0];
            $path = parse_url($full, PHP_URL_PATH) ?: '/';

            if ($path !== '/' && ! str_ends_with($path, '/')) {
                $asset = assetRelativePath($full);

                return $asset ? "{{ asset('{$asset}') }}" : $full;
            }

            return "{{ url('" . pageUrlToPath($full) . "') }}";
        },
        $html
    ) ?? $html;

    $html = preg_replace_callback(
        '/([="\'])\/(?!\/)([^"\']*)(\1)/',
        static function (array $matches) {
            $value = '/' . $matches[2];

            if (preg_match('/\.(css|js|png|jpe?g|webp|gif|svg|ico|woff2?|ttf|eot)(\?.*)?$/i', $value)) {
                return $matches[1] . "{{ asset('assets/mirror/eco-clean.at" . $value . "') }}" . $matches[3];
            }

            return $matches[1] . "{{ url('" . (str_ends_with($value, '/') ? $value : $value . '/') . "') }}" . $matches[3];
        },
        $html
    ) ?? $html;

    $html = preg_replace('/([A-Z0-9._%+\-]+)@([A-Z0-9.\-]+\.[A-Z]{2,})/i', '$1&#64;$2', $html) ?? $html;
    $html = str_replace('action="#"', 'action="{{ route(\'contact.submit\') }}"', $html);
    $html = str_replace('action=""', 'action="{{ route(\'contact.submit\') }}"', $html);
    $html = str_replace('href="#"', 'href="{{ route(\'contact\') }}"', $html);

    return $html;
}

function bladeString(string $value): string
{
    return "'" . str_replace(["\\", "'"], ["\\\\", "\\'"], $value) . "'";
}

function extractSection(string $html, string $startNeedle, string $endNeedle): string
{
    $start = strpos($html, $startNeedle);
    $end = strpos($html, $endNeedle);

    if ($start === false || $end === false || $end <= $start) {
        return '';
    }

    return substr($html, $start + strlen($startNeedle), $end - ($start + strlen($startNeedle)));
}

function pageBlade(array $meta, string $content): string
{
    $schemaLines = '';
    foreach (($meta['schema'] ?? []) as $schema) {
        $schema = trim($schema);
        if ($schema !== '') {
            $schemaLines .= "@verbatim\n<script type=\"application/ld+json\">\n{$schema}\n</script>\n@endverbatim\n";
        }
    }

    $ogImageSection = $meta['og_image'] !== '' ? "@section('og_image', {$meta['og_image']})\n" : '';
    $bodyClassSection = $meta['body_class'] !== '' ? "@section('body_class', {$meta['body_class']})\n" : '';

    $pageStyleSection = '';
    if (! empty($meta['page_styles'])) {
        $pageStyleSection .= "@section('page_styles')\n";
        foreach ($meta['page_styles'] as $style) {
            $pageStyleSection .= "<link rel=\"stylesheet\" href=\"{{ asset('" . assetRelativePath($style) . "') }}\">\n";
        }
        $pageStyleSection .= "@endsection\n";
    }

    return <<<BLADE
@extends('layouts.app')

@section('title', {$meta['title']})
@section('meta_description', {$meta['description']})
@section('canonical', {$meta['canonical']})
@section('robots', {$meta['robots']})
@section('og_title', {$meta['og_title']})
@section('og_description', {$meta['og_description']})
{$ogImageSection}@section('twitter_title', {$meta['twitter_title']})
@section('twitter_description', {$meta['twitter_description']})
{$bodyClassSection}{$pageStyleSection}
@section('schema')
{$schemaLines}@endsection

@section('content')
{$content}
@endsection

BLADE;
}

ensureDir($root . '/storage/app/eco-clean/raw');

$generated = [];

foreach ($missingUrls as $url) {
    $info = viewInfo($url);
    $rawSlug = str_replace('/', '__', trim((string) parse_url($url, PHP_URL_PATH), '/'));
    $rawSlug = $rawSlug === '' ? 'home' : $rawSlug;
    $rawPath = $root . "/storage/app/eco-clean/raw/{$rawSlug}.html";

    try {
        $html = fetchUrl($url);
    } catch (Throwable $e) {
        fwrite(STDERR, "Skipped {$url}: {$e->getMessage()}" . PHP_EOL);
        continue;
    }

    writeFile($rawPath, $html);

    $meta = extractMeta($html);

    foreach (array_merge(findUrls($html), $meta['page_styles']) as $foundUrl) {
        $normalized = normalizeUrl($foundUrl, $url);
        if ($normalized !== null && shouldDownload($normalized, $siteBase)) {
            downloadAsset($normalized, $root);
        }
    }

    $content = extractSection($html, '</header>', '<footer');
    $content = trim(rewriteHtml($content, $siteBase));

    $bladeMeta = [
        'title' => bladeString($meta['title']),
        'description' => bladeString($meta['description']),
        'canonical' => bladeString(pageUrlToPath($url)),
        'robots' => bladeString($meta['robots']),
        'og_title' => bladeString($meta['og_title'] ?: $meta['title']),
        'og_description' => bladeString($meta['og_description'] ?: $meta['description']),
        'og_image' => bladeString($meta['og_image'] ? '/' . (assetRelativePath($meta['og_image']) ?? '') : ''),
        'twitter_title' => bladeString($meta['twitter_title'] ?: $meta['title']),
        'twitter_description' => bladeString($meta['twitter_description'] ?: $meta['description']),
        'body_class' => bladeString($meta['body_class']),
        'page_styles' => $meta['page_styles'],
        'schema' => $meta['schema'],
    ];

    writeFile($root . '/' . $info['file'], pageBlade($bladeMeta, $content));
    $generated[] = $info;
}

foreach ($generated as $page) {
    echo $page['uri'] . '|' . $page['view'] . '|' . $page['route'] . PHP_EOL;
}
