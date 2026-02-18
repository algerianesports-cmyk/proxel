<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch application language
     *
     * @param Request $request
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch(Request $request, $locale)
    {
        $supportedLocales = ['en', 'fr'];

        // Validate the locale
        if (!in_array($locale, $supportedLocales)) {
            $locale = 'fr';
        }

        // Store language preference in session
        session(['locale' => $locale]);

        // Set app locale
        app()->setLocale($locale);

        // Return a JSON response for the AJAX call
        return response()->json(['status' => 'success', 'locale' => $locale]);
    }
}
