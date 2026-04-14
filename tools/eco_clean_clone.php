<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$siteBase = 'https://eco-clean.at';

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
        CURLOPT_TIMEOUT => 60,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; EcoCleanClone/1.0)',
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

    if ($path === '') {
        return '/';
    }

    return '/' . $path . '/';
}

function pageSlug(string $url): string
{
    $path = trim((string) parse_url($url, PHP_URL_PATH), '/');

    return $path === '' ? 'home' : $path;
}

function viewInfo(string $slug): array
{
    if ($slug === 'home') {
        return ['view' => 'pages.home', 'file' => 'resources/views/pages/home.blade.php', 'route' => 'home', 'uri' => '/'];
    }

    if ($slug === 'uber-uns') {
        return ['view' => 'pages.about', 'file' => 'resources/views/pages/about.blade.php', 'route' => 'about', 'uri' => '/uber-uns/'];
    }

    if ($slug === 'kontakt') {
        return ['view' => 'pages.contact', 'file' => 'resources/views/pages/contact.blade.php', 'route' => 'contact', 'uri' => '/kontakt/'];
    }

    if ($slug === 'impressum') {
        return ['view' => 'pages.legal.impressum', 'file' => 'resources/views/pages/legal/impressum.blade.php', 'route' => 'legal.impressum', 'uri' => '/impressum/'];
    }

    if ($slug === 'blogs') {
        return ['view' => 'pages.blog.index', 'file' => 'resources/views/pages/blog/index.blade.php', 'route' => 'blog.index', 'uri' => '/blogs/'];
    }

    if ($slug === 'leistungen') {
        return ['view' => 'pages.services.index', 'file' => 'resources/views/pages/services/index.blade.php', 'route' => 'services.index', 'uri' => '/leistungen/'];
    }

    $serviceSlugs = [
        'hausbetreuung',
        'fensterreinigung-in-wien',
        'gebaudereinigung',
        'winterdienst-in-wien',
        'gartenpflege-in-wien',
        'industriereinigung-in-wien',
        'professionelle-stiegenhausreinigung-in-wien',
        'sonderreinigung-in-wien',
        'bauendreinigung',
        'teppichreinigung-in-wien',
        'professionelle-buroreinigung-in-wien',
        'professionelle-bodenreinigung-in-wien',
        'professionelle-fassadenreinigung',
        'professionelle-garagenreinigung-in-wien',
    ];

    if (in_array($slug, $serviceSlugs, true)) {
        return [
            'view' => "pages.services.{$slug}",
            'file' => "resources/views/pages/services/{$slug}.blade.php",
            'route' => "services.{$slug}",
            'uri' => '/' . $slug . '/',
        ];
    }

    if (str_starts_with($slug, 'reinigungsfirma-')) {
        return [
            'view' => "pages.locations.{$slug}",
            'file' => "resources/views/pages/locations/{$slug}.blade.php",
            'route' => "locations.{$slug}",
            'uri' => '/' . $slug . '/',
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

    if ($path === '' || str_ends_with($path, '/')) {
        return false;
    }

    return true;
}

function rewriteHtml(string $html, string $siteBase): string
{
    $siteHost = parse_url($siteBase, PHP_URL_HOST);

    $html = preg_replace_callback(
        '/https?:\/\/' . preg_quote((string) $siteHost, '/') . '([^\s"\')<]+)/i',
        static function (array $matches) use ($siteBase) {
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
            $schemaLines .= "<script type=\"application/ld+json\">\n{$schema}\n</script>\n";
        }
    }

    $ogImageSection = $meta['og_image'] !== ''
        ? "@section('og_image', {$meta['og_image']})\n"
        : '';

    return <<<BLADE
@extends('layouts.app')

@section('title', {$meta['title']})
@section('meta_description', {$meta['description']})
@section('canonical', {$meta['canonical']})
@section('robots', {$meta['robots']})
@section('og_title', {$meta['og_title']})
@section('og_description', {$meta['og_description']})
{$ogImageSection}
@section('twitter_title', {$meta['twitter_title']})
@section('twitter_description', {$meta['twitter_description']})

@section('schema')
{$schemaLines}@endsection

@section('content')
{$content}
@endsection

BLADE;
}

ensureDir($root . '/tools');
ensureDir($root . '/storage/app/eco-clean/raw');
ensureDir($root . '/public/assets');

$pageSitemap = fetchUrl($siteBase . '/page-sitemap.xml');
$postSitemap = fetchUrl($siteBase . '/post-sitemap.xml');

preg_match_all('/<loc>(.*?)<\/loc>/', $pageSitemap, $pageMatches);
preg_match_all('/<loc>(.*?)<\/loc>/', $postSitemap, $postMatches);

$pageUrls = array_filter($pageMatches[1] ?? [], static fn (string $url) => str_contains($url, $siteBase));
$postUrls = array_filter($postMatches[1] ?? [], static fn (string $url) => str_contains($url, $siteBase));
$manualUrls = [
    $siteBase . '/leistungen/',
];
$urls = array_values(array_unique(array_merge($pageUrls, $postUrls, $manualUrls)));

$rawPages = [];
$assetQueue = [];
$globalCss = [];

foreach ($urls as $url) {
    $slug = pageSlug($url);
    $rawPath = $root . "/storage/app/eco-clean/raw/{$slug}.html";

    if (is_file($rawPath)) {
        $html = (string) file_get_contents($rawPath);
    } else {
        try {
            $html = fetchUrl($url);
        } catch (Throwable $e) {
            continue;
        }

        writeFile($rawPath, $html);
    }

    $rawPages[$slug] = ['url' => $url, 'html' => $html, 'meta' => extractMeta($html)];

    foreach (findUrls($html) as $foundUrl) {
        $normalized = normalizeUrl($foundUrl, $url);
        if ($normalized === null) {
            continue;
        }

        if (shouldDownload($normalized, $siteBase)) {
            $assetQueue[$normalized] = $normalized;
        }
    }

    preg_match_all('/<link[^>]+rel=[\"\']stylesheet[\"\'][^>]+href=[\"\']([^\"\']+)[\"\']/i', $html, $styleMatches);
    foreach ($styleMatches[1] ?? [] as $styleUrl) {
        $normalized = normalizeUrl($styleUrl, $url);
        if ($normalized !== null && shouldDownload($normalized, $siteBase)) {
            $globalCss[$normalized] = $normalized;
        }
    }
}

$downloaded = [];

while ($assetQueue !== []) {
    $url = array_shift($assetQueue);
    if (isset($downloaded[$url])) {
        continue;
    }

    $relative = assetRelativePath($url);
    if ($relative === null) {
        $downloaded[$url] = true;
        continue;
    }

    $target = $root . '/public/' . $relative;
    if (is_file($target)) {
        $downloaded[$url] = true;
        continue;
    }

    try {
        $content = fetchUrl($url);
    } catch (Throwable $e) {
        $downloaded[$url] = true;
        continue;
    }

    writeFile($target, $content);
    $downloaded[$url] = true;

    if (preg_match('/\.css(?:\?.*)?$/i', $url)) {
        foreach (findUrls($content) as $nestedUrl) {
            $normalized = normalizeUrl($nestedUrl, $url);
            if ($normalized !== null && shouldDownload($normalized, $siteBase) && ! isset($downloaded[$normalized])) {
                $assetQueue[$normalized] = $normalized;
            }
        }
    }
}

$homeHtml = $rawPages['home']['html'];
$headerHtml = extractSection($homeHtml, '<header', '<div data-rocket-location-hash="6889dd8c66d11e5320d8a3b630a0309d"');
$footerHtml = extractSection($homeHtml, '<footer', '</footer>') . '</footer>';
$headerHtml = rewriteHtml($headerHtml, $siteBase);
$footerHtml = rewriteHtml($footerHtml, $siteBase);

writeFile($root . '/resources/views/partials/header.blade.php', $headerHtml . "\n");
writeFile($root . '/resources/views/partials/footer.blade.php', $footerHtml . "\n");

$globalCssTags = '';
foreach (array_values($globalCss) as $url) {
    $relative = assetRelativePath($url);
    if ($relative !== null) {
        $globalCssTags .= '<link rel="stylesheet" href="{{ asset(\'' . $relative . '\') }}">' . PHP_EOL;
    }
}

writeFile(
    $root . '/resources/views/partials/meta.blade.php',
    <<<BLADE
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'ECO Clean')</title>
<meta name="description" content="@yield('meta_description', '')">
@if(trim(\$__env->yieldContent('robots')) !== '')
<meta name="robots" content="@yield('robots')">
@endif
@php
    \$canonicalValue = trim(\$__env->yieldContent('canonical'));
    \$canonicalUrl = \$canonicalValue === '' ? url()->current() : (str_starts_with(\$canonicalValue, 'http') ? \$canonicalValue : url(\$canonicalValue));
    \$ogImageValue = trim(\$__env->yieldContent('og_image'));
    \$ogImageUrl = \$ogImageValue === '' ? '' : (str_starts_with(\$ogImageValue, 'http') ? \$ogImageValue : asset(ltrim(\$ogImageValue, '/')));
@endphp
<link rel="canonical" href="{{ \$canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('og_title', trim(\$__env->yieldContent('title')))">
<meta property="og:description" content="@yield('og_description', trim(\$__env->yieldContent('meta_description')))">
<meta property="og:url" content="{{ \$canonicalUrl }}">
<meta property="og:site_name" content="ECO Clean">
@if(\$ogImageUrl !== '')
<meta property="og:image" content="{{ \$ogImageUrl }}">
@endif
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', trim(\$__env->yieldContent('title')))">
<meta name="twitter:description" content="@yield('twitter_description', trim(\$__env->yieldContent('meta_description')))">
@if(\$ogImageUrl !== '')
<meta name="twitter:image" content="{{ \$ogImageUrl }}">
@endif
<link rel="icon" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/cropped-eco-clean-high-resolution-logo-4-32x32.png') }}">
{$globalCssTags}<link rel="stylesheet" href="{{ asset('assets/css/clone-overrides.css') }}">
@yield('schema')

BLADE
);

writeFile(
    $root . '/resources/views/partials/scripts.blade.php',
    <<<BLADE
<script src="{{ asset('assets/js/clone-app.js') }}"></script>

BLADE
);

writeFile(
    $root . '/resources/views/layouts/app.blade.php',
    <<<BLADE
<!DOCTYPE html>
<html lang="de">
<head>
    @include('partials.meta')
</head>
<body class="custom-background">
    <div id="page" class="hfeed site">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>

BLADE
);

writeFile(
    $root . '/public/assets/css/clone-overrides.css',
    <<<CSS
html {
    overflow-x: hidden;
}

body {
    margin: 0;
    font-family: Roboto, Arial, Helvetica, sans-serif;
}

.cmplz-cookiebanner,
.cmplz-blocked-content-container,
.cmplz-cookiebanner-container,
.cmplz-placeholder-parent,
.hfe-scroll-to-top-wrap,
.skiptranslate,
script[src*="wp-admin"],
script[src*="ajax"] {
    display: none !important;
}

form {
    position: relative;
}

.eco-clone-form-note {
    margin-top: 12px;
    font-size: 12px;
    color: #5f6b7a;
}

CSS
);

writeFile(
    $root . '/public/assets/js/clone-app.js',
    <<<JS
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('form').forEach((form) => {
        if (!form.querySelector('.eco-clone-form-note')) {
            const note = document.createElement('p');
            note.className = 'eco-clone-form-note';
            note.textContent = 'Frontend-Demoformular. Die Verarbeitung ist in dieser Laravel-Clone-Version noch nicht verbunden.';
            form.appendChild(note);
        }

        form.addEventListener('submit', (event) => {
            event.preventDefault();
        });
    });

    const menuButton = document.querySelector('.menu-toggle, .hfe-nav-menu__toggle');
    const menuPanel = document.querySelector('.hfe-nav-menu, .main-menu__wrapper');

    if (menuButton && menuPanel) {
        menuButton.addEventListener('click', () => {
            menuPanel.classList.toggle('is-open');
        });
    }

    const sliders = document.querySelectorAll('.elementor-main-swiper');
    sliders.forEach((slider) => {
        const slides = Array.from(slider.querySelectorAll('.swiper-slide'));
        if (slides.length < 2) {
            return;
        }

        let index = 0;

        const showSlide = (nextIndex) => {
            slides.forEach((slide, slideIndex) => {
                slide.style.display = slideIndex === nextIndex ? 'block' : 'none';
            });
            index = nextIndex;
        };

        showSlide(0);

        const nextButton = slider.parentElement?.querySelector('.elementor-swiper-button-next');
        const prevButton = slider.parentElement?.querySelector('.elementor-swiper-button-prev');

        nextButton?.addEventListener('click', () => {
            showSlide((index + 1) % slides.length);
        });

        prevButton?.addEventListener('click', () => {
            showSlide((index - 1 + slides.length) % slides.length);
        });

        window.setInterval(() => {
            showSlide((index + 1) % slides.length);
        }, 5000);
    });
});

JS
);

$routeLines = [
    '<?php',
    '',
    'use Illuminate\Http\Request;',
    'use Illuminate\Support\Facades\Route;',
    '',
    "Route::post('/contact-submit', function (Request \$request) {",
    "    return back()->with('status', 'Frontend-only placeholder form.');",
    "})->name('contact.submit');",
    '',
];

$readmeLines = [
    '# ECO Clean Blade Clone',
    '',
    '## Pages cloned',
];

foreach ($rawPages as $slug => $page) {
    $info = viewInfo($slug);
    $ogImagePath = $page['meta']['og_image'] ? '/' . (assetRelativePath($page['meta']['og_image']) ?? '') : '';
    $meta = array_map('bladeString', [
        'title' => $page['meta']['title'],
        'description' => $page['meta']['description'],
        'canonical' => pageUrlToPath($page['url']),
        'robots' => $page['meta']['robots'],
        'og_title' => $page['meta']['og_title'] ?: $page['meta']['title'],
        'og_description' => $page['meta']['og_description'] ?: $page['meta']['description'],
        'og_image' => $ogImagePath,
        'twitter_title' => $page['meta']['twitter_title'] ?: $page['meta']['title'],
        'twitter_description' => $page['meta']['twitter_description'] ?: $page['meta']['description'],
    ]);

    $content = extractSection($page['html'], '</header>', '<footer');
    $content = trim(rewriteHtml($content, $siteBase));

    writeFile($root . '/' . $info['file'], pageBlade($meta, $content));
    $routeLines[] = "Route::view('{$info['uri']}', '{$info['view']}')->name('{$info['route']}');";
    $readmeLines[] = "- {$info['uri']} -> `{$info['view']}`";
}

$readmeLines[] = '';
$readmeLines[] = '## Assets downloaded';
$readmeLines[] = '- Mirrored public CSS, JS, image, font, and icon assets under `public/assets/mirror/eco-clean.at/...`.';
$readmeLines[] = '- Added local override CSS in `public/assets/css/clone-overrides.css`.';
$readmeLines[] = '- Added local interaction script in `public/assets/js/clone-app.js`.';
$readmeLines[] = '';
$readmeLines[] = '## Placeholders detected';
$readmeLines[] = '- All contact forms are preserved visually but behave as frontend-only demo forms.';
$readmeLines[] = '- Public blog content includes likely placeholder/demo posts and should be reviewed before production.';
$readmeLines[] = '';
$readmeLines[] = '## Manual review';
$readmeLines[] = '- Verify German umlaut encoding on any copied content that was originally served with mixed encoding.';
$readmeLines[] = '- Review the public blog list for placeholder or spam content.';
$readmeLines[] = '- Compare high-value landing pages against the live site in-browser and tighten any remaining spacing differences.';

writeFile($root . '/routes/web.php', implode(PHP_EOL, $routeLines) . PHP_EOL);
writeFile($root . '/README_CLONE.md', implode(PHP_EOL, $readmeLines) . PHP_EOL);

echo 'Generated clone scaffolding for ' . count($rawPages) . ' pages.' . PHP_EOL;
