<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

final class LanguageController extends Controller
{
    /**
     * Supported locales.
     */
    private const SUPPORTED_LOCALES = ['en', 'fr'];

    /**
     * Switch the application locale via AJAX.
     *
     * Stores the selected locale in the session and returns
     * all translation strings for the new locale so the frontend
     * can swap content without a full page reload.
     */
    public function switch(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'locale' => ['required', 'string', 'in:en,fr'],
        ]);

        $locale = $validated['locale'];

        // Set locale and persist in session
        App::setLocale($locale);
        session(['locale' => $locale]);

        // Load all translation files for the requested locale
        $translations = $this->loadTranslations($locale);

        return response()->json([
            'success' => true,
            'locale' => $locale,
            'translations' => $translations,
        ]);
    }

    /**
     * Load all translation arrays for a given locale.
     *
     * @return array<string, array<string, string>>
     */
    private function loadTranslations(string $locale): array
    {
        $langPath = lang_path($locale);
        $translations = [];

        if (! is_dir($langPath)) {
            return $translations;
        }

        foreach (glob($langPath . '/*.php') as $file) {
            $group = basename($file, '.php');
            $translations[$group] = require $file;
        }

        return $translations;
    }
}
