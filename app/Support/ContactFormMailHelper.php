<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ContactFormMailHelper
{
    public static function rules(Request $request): array
    {
        $rules = [
            'email' => ['required', 'email', 'max:255'],
        ];

        if (self::hasInput($request, 'names.first_name')) {
            $rules['names.first_name'] = ['required', 'string', 'max:100'];
        }

        if (self::hasInput($request, 'first_name')) {
            $rules['first_name'] = ['required', 'string', 'max:100'];
        }

        if (self::hasInput($request, 'names.last_name')) {
            $rules['names.last_name'] = ['nullable', 'string', 'max:100'];
        }

        if (self::hasInput($request, 'last_name')) {
            $rules['last_name'] = ['nullable', 'string', 'max:100'];
        }

        if (self::hasInput($request, 'phone')) {
            $rules['phone'] = ['required', 'string', 'max:50'];
        }

        if (self::hasInput($request, 'message')) {
            $rules['message'] = ['required', 'string', 'max:5000'];
        }

        if (self::hasInput($request, 'dropdown')) {
            $rules['dropdown'] = ['nullable', 'string', 'max:255'];
        }

        if (self::hasInput($request, 'regarding')) {
            $rules['regarding'] = ['required', 'string', 'max:255'];
        }

        if ($request->boolean('eco_requires_privacy')) {
            if ($request->has('privacy') || Arr::has($request->all(), 'privacy')) {
                $rules['privacy'] = ['accepted'];
            } else {
                $rules['checkbox'] = ['required', 'array', 'min:1'];
            }
        }

        return $rules;
    }

    public static function payload(Request $request, array $validated): array
    {
        $all = $request->all();
        $firstName = trim((string) (data_get($validated, 'names.first_name')
            ?? $validated['first_name']
            ?? ''));
        $lastName = trim((string) (data_get($validated, 'names.last_name')
            ?? $validated['last_name']
            ?? ''));
        $fullName = trim($firstName . ' ' . $lastName);

        $fields = collect(Arr::dot($all))
            ->reject(function ($value, $key) {
                return Str::startsWith($key, '_')
                    || Str::startsWith($key, 'eco_')
                    || in_array($key, ['privacy'], true)
                    || Str::startsWith($key, 'checkbox.');
            })
            ->mapWithKeys(fn ($value, $key) => [self::label($key) => self::stringValue($value)])
            ->filter(fn ($value) => $value !== '')
            ->all();

        return [
            'name' => $fullName !== '' ? $fullName : 'Website visitor',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => (string) ($validated['email'] ?? ''),
            'phone' => trim((string) ($validated['phone'] ?? '')),
            'subject' => trim((string) ($validated['dropdown'] ?? $validated['regarding'] ?? 'General Inquiry')),
            'message' => trim((string) ($validated['message'] ?? '')),
            'source_url' => self::sourceUrl($request),
            'submitted_at' => now(),
            'fields' => $fields,
        ];
    }

    protected static function hasInput(Request $request, string $key): bool
    {
        return Arr::has($request->all(), $key);
    }

    protected static function sourceUrl(Request $request): string
    {
        $source = $request->input('eco_form_source')
            ?: $request->input('_wp_http_referer')
            ?: url()->previous();

        if (Str::startsWith($source, '/')) {
            return url($source);
        }

        return (string) $source;
    }

    protected static function label(string $key): string
    {
        return (string) str($key)
            ->replace(['names.', 'checkbox.', 'input_text', 'regarding'], ['', '', 'news', 'regarding'])
            ->replace('.', ' ')
            ->replace('_', ' ')
            ->title();
    }

    protected static function stringValue(mixed $value): string
    {
        if (is_array($value)) {
            return implode(', ', array_map(fn ($item) => (string) $item, $value));
        }

        return trim((string) $value);
    }
}
