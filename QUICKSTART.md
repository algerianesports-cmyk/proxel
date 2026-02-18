# 🚀 Quick Start - Proxel i18n (English/French)

## Start the Server

```bash
cd c:\xampp2\htdocs\pr
php artisan serve --port=8000
```

**Then visit:**
- English: http://localhost:8000/en
- French: http://localhost:8000/fr

---

## Use Translations in Code

### In Blade Templates:
```blade
<!-- Display English or French text (auto-selected) -->
{{ __('messages.hero_title') }}
{{ __('messages.service_request') }}

<!-- In HTML attributes -->
<input placeholder="{{ __('messages.email_address') }}" />

<!-- In form labels -->
<label>{{ __('messages.contact_us') }}</label>
```

### Add New Translation Key:

1. **In `resources/lang/en/messages.php`:**
```php
'your_key' => 'Your English text here',
```

2. **In `resources/lang/fr/messages.php`:**
```php
'your_key' => 'Votre texte français ici',
```

3. **In your Blade file:**
```blade
{{ __('messages.your_key') }}
```

---

## Directory Structure

```
proxel/
├── resources/
│   ├── lang/
│   │   ├── en/
│   │   │   └── messages.php (73 keys)
│   │   └── fr/
│   │       └── messages.php (73 keys)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php ← includes language selector
│       ├── home.blade.php ← uses __() helpers
│       └── components/
│           ├── footer.blade.php ← uses __() helpers
│           └── language-selector.blade.php ← dropdown menu
├── app/
│   └── Http/
│       ├── Middleware/
│       │   └── SetLocale.php ← validates locale
│       └── Controllers/
│           └── LanguageController.php ← switches language
└── routes/
    └── web.php ← /en, /fr routes with middleware
```

---

## Available Translation Keys

### Navigation
```
home, about, services, contact, language
en, fr
```

### Hero Section
```
hero_title, hero_subtitle, service_request
```

### Services
```
leading, effective_solutions, service_description
service_1, service_1_desc
service_2, service_2_desc
service_3, service_3_desc
read_more
```

### About
```
intelligent, leaders_appliance, about_description
years_experience, since_1990
commitment, expert_service, affordable_rates, contact_us
```

### Process
```
the_steps_of, our_service_process, process_description
diagnostic_assessment, diagnostic_desc
repair_execution, repair_desc
quality_testing, testing_desc
customer_satisfaction, satisfaction_desc
```

### Team
```
dedicated_team, professional_technicians
technician_one, senior_technician, tech_one_desc, view_profile
technician_two, commercial_specialist, tech_two_desc
technician_three, installation_expert, tech_three_desc
```

### Blog
```
find_out_our, latest_articles
maintenance_tips, maintenance_desc
repair_vs_replace, repair_desc
refrigerator_problems, fridge_desc
post_comment
```

### Footer
```
company_name, all_rights_reserved
subscribe_us, subscribe_desc
email_address, sign_up, email_not_shared
informations, follow, hours
monday_friday, contact_number, phone
```

---

## Common Tasks

### Clear Translation Cache
```bash
php artisan cache:clear
```

### Check Current Language
```blade
{{ app()->getLocale() }}  <!-- Returns 'en' or 'fr' -->
```

### Redirect to Specific Language
```blade
<a href="{{ route('home', ['locale' => 'fr']) }}">French</a>
<a href="{{ route('home', ['locale' => 'en']) }}">English</a>
```

### Conditionally Render Content
```blade
@if(app()->getLocale() === 'fr')
    <p>Français</p>
@else
    <p>English</p>
@endif
```

---

## URL Patterns

| URL | Result |
|-----|--------|
| `/` | Redirects to `/en` |
| `/en` | English homepage |
| `/fr` | French homepage |
| `/language/en` | Switch to English (redirects to referrer) |
| `/language/fr` | Switch to French (redirects to referrer) |

---

## User Experience Flow

1. **User visits site**
   ```
   http://localhost/en → English version loads
   ```

2. **User clicks language dropdown**
   ```
   Dropdown shows: 🇬🇧 English | 🇫🇷 Français
   ```

3. **User clicks "Français"**
   ```
   Page switches to /fr
   All content displays in French
   Language selector now shows "FR"
   ```

4. **User navigates**
   ```
   All links maintain /fr prefix
   Content stays in French
   ```

---

## Troubleshooting

### Problem: Strings show "messages.key"
```bash
# Solution:
php artisan cache:clear
# Refresh page
```

### Problem: Language dropdown missing
```
Check: resources/views/layouts/app.blade.php
Should include: @include('components.language-selector')
```

### Problem: 404 Error on /fr route
```
Check: routes/web.php
Should have: Route::prefix('{locale}')->middleware('locale')->group(...)
```

### Problem: New translation key blank
```
Add key to BOTH files:
- resources/lang/en/messages.php
- resources/lang/fr/messages.php
Use same key name in both!
```

---

## Performance Tips

- ✅ Translations are fast (files cached in production)
- ✅ No database needed
- ✅ No AJAX required
- ✅ SEO-friendly distinct URLs
- ✅ Mobile responsive

---

## Files to Know

| File | Purpose |
|------|---------|
| `resources/lang/en/messages.php` | All English strings |
| `resources/lang/fr/messages.php` | All French strings |
| `resources/views/components/language-selector.blade.php` | Language dropdown |
| `app/Http/Middleware/SetLocale.php` | Locale detection |
| `routes/web.php` | URL routing with locale |

---

## Related Documentation

- **Full Guide:** `I18N_IMPLEMENTATION.md`
- **Overview:** `I18N_SUMMARY.md`
- **Testing:** `I18N_TESTING_CHECKLIST.md`
- **This File:** `QUICKSTART.md`

---

## Need to Add Spanish?

1. Create `resources/lang/es/messages.php`
2. Copy all keys from English
3. Translate values to Spanish
4. Update middleware in `app/Http/Middleware/SetLocale.php`:
   ```php
   $supportedLocales = ['en', 'fr', 'es'];  // Add 'es'
   ```
5. Test with `/es` URL

---

## Production Checklist

- [ ] Run `php artisan cache:clear`
- [ ] Test both `/en` and `/fr` URLs
- [ ] Verify language selector on mobile
- [ ] Check translations are complete
- [ ] Deploy files to production
- [ ] Test on live domain

---

## Get Help

1. Check `I18N_IMPLEMENTATION.md` for detailed docs
2. Review Blade files for `__()` usage examples
3. Check translation files for key names
4. Run `php artisan cache:clear` if unsure
5. Test URLs directly: `/en` vs `/fr`

---

## Summary

✅ **English & French** - Full bilingual support
✅ **Easy switching** - One-click language selection
✅ **SEO ready** - Distinct URLs per language
✅ **Scalable** - Add new languages easily
✅ **Production ready** - Zero dependencies

Happy translating! 🌍

