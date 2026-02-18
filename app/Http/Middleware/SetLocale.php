<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

final class SetLocale
{
    /**
     * Supported locales.
     */
    private const SUPPORTED_LOCALES = ['en', 'fr'];

    /**
     * Default locale (French).
     */
    private const DEFAULT_LOCALE = 'fr';

    /**
     * Handle an incoming request.
     *
     * Validates the {locale} route parameter, sets the app locale,
     * persists it in session, and generates locale-aware default URLs.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        // If locale is missing or invalid, redirect to the default locale
        if (! $locale || ! in_array($locale, self::SUPPORTED_LOCALES, true)) {
            $preferredLocale = $this->detectBrowserLocale($request);

            return redirect($this->buildRedirectUrl($request, $preferredLocale));
        }

        // Set application locale
        App::setLocale($locale);

        // Persist in session
        session(['locale' => $locale]);

        // Make URL generator aware of the current locale
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }

    /**
     * Detect the preferred locale from the browser's Accept-Language header.
     * Falls back to session value, then to the default locale (French).
     */
    private function detectBrowserLocale(Request $request): string
    {
        // If user already has a session preference, use it
        if ($sessionLocale = session('locale')) {
            if (in_array($sessionLocale, self::SUPPORTED_LOCALES, true)) {
                return $sessionLocale;
            }
        }

        // Parse Accept-Language header
        $acceptLanguage = $request->header('Accept-Language', '');
        $preferred = $this->parseAcceptLanguage($acceptLanguage);

        foreach ($preferred as $lang) {
            $short = substr($lang, 0, 2);
            if (in_array($short, self::SUPPORTED_LOCALES, true)) {
                return $short;
            }
        }

        return self::DEFAULT_LOCALE;
    }

    /**
     * Parse Accept-Language header and return sorted language codes.
     *
     * @return string[]
     */
    private function parseAcceptLanguage(string $header): array
    {
        if (empty($header)) {
            return [];
        }

        $languages = [];

        foreach (explode(',', $header) as $part) {
            $part = trim($part);
            if (str_contains($part, ';q=')) {
                [$lang, $q] = explode(';q=', $part);
                $languages[trim($lang)] = (float) $q;
            } else {
                $languages[$part] = 1.0;
            }
        }

        arsort($languages);

        return array_keys($languages);
    }

    /**
     * Build a redirect URL replacing or inserting the locale segment.
     */
    private function buildRedirectUrl(Request $request, string $locale): string
    {
        $path = $request->path();

        // Remove existing invalid locale prefix if present
        $segments = explode('/', $path);
        if (! empty($segments[0]) && strlen($segments[0]) === 2 && ! in_array($segments[0], self::SUPPORTED_LOCALES, true)) {
            array_shift($segments);
            $path = implode('/', $segments);
        }

        $newPath = '/' . $locale . ($path !== '/' ? '/' . ltrim($path, '/') : '');

        $query = $request->getQueryString();

        return $newPath . ($query ? '?' . $query : '');
    }
}
