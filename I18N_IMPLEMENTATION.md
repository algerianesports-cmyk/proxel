# Internationalisation (i18n) Implementation Guide

## Overview
This document outlines the dual-language (English/French) implementation for the Proxel website using Laravel's built-in localization system.

## Architecture

### File Structure
```
resources/
├── lang/
│   ├── en/
│   │   └── messages.php (73 translation keys)
│   └── fr/
│       └── messages.php (73 translation keys - French versions)
├── views/
│   ├── layouts/
│   │   └── app.blade.php (Master layout with language selector)
│   ├── home.blade.php (Updated with __() translation helpers)
│   └── components/
│       ├── footer.blade.php (Updated with __() translation helpers)
│       └── language-selector.blade.php (NEW - Language dropdown menu)
app/
├── Http/
│   ├── Middleware/
│   │   └── SetLocale.php (NEW - Middleware for locale management)
│   └── Controllers/
│       └── LanguageController.php (NEW - Handle language switching)
routes/
└── web.php (Updated with locale-prefixed routes)
bootstrap/
└── app.php (Updated middleware configuration)
```

## Features

### 1. **Language Prefix Routes**
All routes are automatically prefixed with language code:
- `/en/` - English version
- `/fr/` - French version
- `/` - Redirects to `/en` (default language)

**Example URL patterns:**
- Homepage (EN): `http://localhost/en`
- Homepage (FR): `http://localhost/fr`

### 2. **Automatic Locale Detection & Setting**
The `SetLocale` middleware automatically:
- Extracts locale from route parameter
- Validates against supported locales (en, fr)
- Sets Laravel's application locale using `app()->setLocale($locale)`
- Falls back to English if locale is invalid

**Supported locales:**
- `en` - English
- `fr` - French

### 3. **Language Selector Component**
**File:** `resources/views/components/language-selector.blade.php`

Features:
- Dropdown menu with flag emojis (🇬🇧 English, 🇫🇷 Français)
- Displays current language in header
- Smooth toggle animation
- Automatically sets current language based on `app()->getLocale()`
- Closes when clicking outside
- No page refresh required (GET request)

**Visual Location:** Top-right of header navigation bar

### 4. **Translation Keys**
Both English and French translation files contain 73 keys organized by section:

```php
// Example key structure
'app_name' => 'Proxel',
'home' => 'Accueil',
'hero_title' => 'Competent technicians' // EN
'hero_title' => 'Techniciens Compétents' // FR
```

**Sections covered:**
- Navigation & General
- Hero Section (title, subtitle, CTA)
- Services Section (titles, descriptions, buttons)
- About Section (headings, content)
- Process/Timeline Section
- Team Section (technician names, roles, bios)
- Blog Section (post titles, descriptions)
- Footer Section (contact, links, subscription)

### 5. **Translation Helper Usage**
All string content uses Laravel's `__()` translation helper:

```blade
<!-- Single string translation -->
<h1>{{ __('messages.hero_title') }}</h1>

<!-- With fallback (optional) -->
{{ __('messages.key', 'Fallback text') }}

<!-- In attributes -->
<input placeholder="{{ __('messages.email_address') }}" />
```

## Translation Files

### English (`resources/lang/en/messages.php`)
Contains all English strings with 73 keys covering:
- UI labels and buttons ('service_request', 'read_more', etc.)
- Section headings ('effective_solutions', 'our_service_process', etc.)
- Descriptive content (team bios, service descriptions)
- Form labels ('email_address', 'enter_your_name', etc.)
- Footer content (links, contact info)

### French (`resources/lang/fr/messages.php`)
Complete French translations mirror the English structure:
- All 73 keys translated to French
- Maintains same key names for interchangeability
- Follows French localization conventions
- Example: `'demande_de_service'` = "Demande de Service"

## Configuration

### Middleware Registration
**File:** `bootstrap/app.php`

```php
->withMiddleware(function (Middleware $middleware): void {
    $middleware->alias([
        'locale' => \App\Http\Middleware\SetLocale::class,
    ]);
})
```

### Routes Configuration
**File:** `routes/web.php`

```php
// Language switching (GET request - preserves current page)
Route::get('language/{locale}', [LanguageController::class, 'switch'])
    ->name('language.switch');

// Content routes with language prefix
Route::prefix('{locale}')->middleware('locale')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});

// Default redirect (root to English)
Route::redirect('/', '/en');
```

## How It Works

### 1. **Initial Page Load**
1. User clicks on `http://localhost/en` or `http://localhost/fr`
2. Route parameter `{locale}` captured (e.g., 'en' or 'fr')
3. `SetLocale` middleware validates and sets `app()->setLocale($locale)`
4. View renders with appropriate language keys from `resources/lang/{locale}/messages.php`

### 2. **Language Switching**
1. User clicks language dropdown in header (EN/FR selector)
2. Navigation uses `route('home', ['locale' => 'en'])` or `route('home', ['locale' => 'fr'])`
3. New page loads with language-prefixed URL (`/en` or `/fr`)
4. Middleware sets appropriate locale for that request
5. Page content displays in selected language

### 3. **URL Structure Example**
```
Before: http://localhost/
After:  http://localhost/en/ (default redirect)

English version: http://localhost/en
French version:  http://localhost/fr

All navigation maintains locale:
- Home (EN): /en
- Home (FR): /fr
```

## Adding New Content

### To Add a New Translatable String:

1. **Add the key to both translation files:**
   - `resources/lang/en/messages.php`
   - `resources/lang/fr/messages.php`

   ```php
   // In en/messages.php
   'new_feature' => 'Your English text here',

   // In fr/messages.php
   'new_feature' => 'Votre texte français ici',
   ```

2. **Use in Blade templates:**
   ```blade
   {{ __('messages.new_feature') }}
   ```

3. **Organize by section for maintainability:**
   - Keep related keys together
   - Use descriptive key names (e.g., `service_request_btn`, `service_request_desc`)
   - Add comments for complex sections

## Testing the Implementation

### Manual Testing

1. **Navigate to English version:**
   - Open `http://localhost:8000/en`
   - Verify all content displays in English
   - Check that language selector shows "EN"

2. **Switch to French:**
   - Click the language dropdown
   - Select "Français"
   - Verify URL changes to `/fr`
   - Verify all content displays in French
   - Check that language selector now shows "FR"

3. **Navigation persistence:**
   - Switch to French
   - Click navigation links
   - Verify URL maintains `/fr` prefix
   - Content remains in French

4. **Direct URL access:**
   - Type `http://localhost:8000/en` directly - English loads
   - Type `http://localhost:8000/fr` directly - French loads
   - Type `http://localhost:8000/` - Redirects to `/en`

### Pages Tested:
✓ Home page (hero, services, about, process, team, blog sections)
✓ Header and navigation
✓ Footer with contact form and links
✓ Language selector dropdown

## Troubleshooting

### Issue: String shows raw translation key (e.g., "messages.hero_title")
**Solution:** Ensure Blade file uses `{{ __('messages.key') }}` syntax and translation file exists in `resources/lang/{locale}/`.

### Issue: Language doesn't change after clicking selector
**Solution:** Verify `SetLocale` middleware is registered in `bootstrap/app.php` and route includes middleware: `->middleware('locale')`

### Issue: 404 error on `/en` or `/fr`
**Solution:** Check that routes are defined in `routes/web.php` with language prefix and middleware.

### Issue: New translation key shows fallback/key name
**Solution:** Verify key exists in both `en/messages.php` and `fr/messages.php` with exact same key name.

## Performance Notes

- **Caching:** Translation files are cached by Laravel in production. Clear cache after updates: `php artisan cache:clear`
- **No page refresh:** Language switching uses standard GET requests (Blade routes), no AJAX required
- **SEO friendly:** Each language version has distinct URL structure (`/en`, `/fr`)

## Future Enhancements

Possible improvements:
1. Add more languages (Spanish, German, etc.)
2. Implement language preference persistence in user profiles
3. Add automatic language detection based on browser locale
4. Create admin panel for translation management
5. Implement language fallback chain (e.g., `fr_CA` → `fr` → `en`)
6. Add RTL language support for Arabic, Hebrew, etc.
7. Use JSON translation files for frontend JavaScript translations

## Files Modified/Created

### Created:
- ✅ `resources/lang/en/messages.php` (73 keys)
- ✅ `resources/lang/fr/messages.php` (73 keys)
- ✅ `app/Http/Middleware/SetLocale.php`
- ✅ `app/Http/Controllers/LanguageController.php`
- ✅ `resources/views/components/language-selector.blade.php`

### Modified:
- ✅ `routes/web.php` (added locale routes and middleware)
- ✅ `bootstrap/app.php` (registered middleware)
- ✅ `resources/views/layouts/app.blade.php` (added language selector component)
- ✅ `resources/views/home.blade.php` (wrapped all text in `__()` helpers)
- ✅ `resources/views/components/footer.blade.php` (wrapped all text in `__()` helpers)

## Summary

The Proxel website now supports seamless bilingual (English/French) functionality:
- ✅ URL-based locale detection (`/en`, `/fr`)
- ✅ Automatic middleware-based locale setting
- ✅ User-friendly language selector dropdown
- ✅ 73 translated keys covering all page content
- ✅ Extendable architecture for future languages
- ✅ SEO-friendly URL structure
- ✅ No database required for translations
- ✅ Easy maintenance and updates

