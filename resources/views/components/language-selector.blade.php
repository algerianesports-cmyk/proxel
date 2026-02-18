{{--
    Language Selector Component
    Renders a simple text link showing the OTHER language.
    On click, triggers AJAX switching handled by the lang-switcher JS in layout.
--}}
@php
    $otherLocale = app()->getLocale() === 'fr' ? 'en' : 'fr';
@endphp

<a href="#" id="lang-switcher-mobile" class="lang-switch-btn" data-locale="{{ $otherLocale }}"
    style="font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#fff; text-decoration:none;">
    {{ strtoupper($otherLocale) }}
</a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mobileSwitcher = document.getElementById('lang-switcher-mobile');
        if (mobileSwitcher) {
            mobileSwitcher.addEventListener('click', function(e) {
                e.preventDefault();
                // Delegate to the main switcher
                var mainSwitcher = document.getElementById('lang-switcher');
                if (mainSwitcher) {
                    mainSwitcher.click();
                }
            });
        }
    });
</script>
