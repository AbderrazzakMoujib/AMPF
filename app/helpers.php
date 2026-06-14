<?php

/**
 * AMPF — Locale Helpers
 * =====================
 * Production:   en.ampf.ma  → EN  |  ampf.ma → FR  (subdomain)
 * Local dev:    localhost?lang=en  |  localhost    (query param fallback)
 */

if (!function_exists('ampfIsLocal')) {
    /**
     * Returns true when running on localhost / 127.0.0.1 / dev environments.
     */
    function ampfIsLocal(): bool
    {
        $host = request()->getHost();
        return in_array($host, ['localhost', '127.0.0.1', '::1'])
            || str_ends_with($host, '.test')
            || str_ends_with($host, '.local');
    }
}

if (!function_exists('ampfBaseDomain')) {
    function ampfBaseDomain(): string
    {
        return config('app.base_domain', 'ampf.ma');
    }
}

if (!function_exists('localeUrl')) {
    /**
     * Build URL for a given path + locale.
     * - Local:      adds ?lang=en query param
     * - Production: switches subdomain (en.ampf.ma)
     */
    function localeUrl(string $path = '/', ?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $scheme = request()->getScheme();

        // ── LOCAL DEV: use query param ?lang= ──────────────────────────
        if (ampfIsLocal()) {
            $base = request()->getSchemeAndHttpHost(); // e.g. http://localhost:8000

            // Strip existing ?lang= from path
            $cleanPath = preg_replace('/([?&])lang=[^&]*(&|$)/', '$1', $path);
            $cleanPath = rtrim($cleanPath, '?&');

            $separator = str_contains($cleanPath, '?') ? '&' : '?';

            if ($locale === 'en') {
                return $base . $cleanPath . $separator . 'lang=en';
            } else {
                // FR = no param (default)
                return $base . ($cleanPath ?: '/');
            }
        }

        // ── PRODUCTION: use subdomain ──────────────────────────────────
        $base   = ampfBaseDomain();
        $domain = ($locale === 'en') ? "en.{$base}" : $base;

        return rtrim("{$scheme}://{$domain}{$path}", '/') ?: "{$scheme}://{$domain}/";
    }
}

if (!function_exists('localeRoute')) {
    /**
     * Get the URL for a named route in the given locale.
     */
    function localeRoute(string $name, ?string $locale = null, array $params = []): string
    {
        $locale = $locale ?? app()->getLocale();
        $path   = route($name, $params, false); // relative path only

        return localeUrl($path, $locale);
    }
}

if (!function_exists('langSwitchUrl')) {
    /**
     * Switch current page to target locale.
     */
    function langSwitchUrl(string $targetLocale): string
    {
        $currentPath = request()->getRequestUri();
        return localeUrl($currentPath, $targetLocale);
    }
}
