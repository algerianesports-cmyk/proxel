<div class="language-selector-wrapper">
    <button class="language-btn" type="button">
        <img src="{{ asset('assets/images/flags/' . app()->getLocale() . '.png') }}"
            alt="{{ strtoupper(app()->getLocale()) }}" class="language-flag-current">
        <span class="language-current">{{ strtoupper(app()->getLocale()) }}</span>
        <i class="fa fa-chevron-down language-caret"></i>
    </button>

    <div class="language-dropdown">
        <a href="#" class="language-option" onclick="switchLanguage('en'); return false;" data-lang="en">
            <img src="{{ asset('assets/images/flags/en.png') }}" alt="EN" class="language-flag">
            <span>{{ __('messages.en') }}</span>
        </a>
        <a href="#" class="language-option" onclick="switchLanguage('fr'); return false;" data-lang="fr">
            <img src="{{ asset('assets/images/flags/fr.png') }}" alt="FR" class="language-flag">
            <span>{{ __('messages.fr') }}</span>
        </a>
    </div>
</div>

<script>
    // Initialize dropdown logic
    function initLanguageSelector() {
        const languageBtn = document.querySelector('.language-btn');
        const languageDropdown = document.querySelector('.language-dropdown');

        if (languageBtn && languageDropdown) {
            // Clone to remove old listeners
            const newBtn = languageBtn.cloneNode(true);
            languageBtn.parentNode.replaceChild(newBtn, languageBtn);

            newBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                languageDropdown.classList.toggle('is-open');
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.language-selector-wrapper')) {
                    languageDropdown.classList.remove('is-open');
                }
            });
        }
    }

    // Run on initial load
    document.addEventListener('DOMContentLoaded', initLanguageSelector);

    // Global switch function
    window.switchLanguage = function(locale) {
        // Toggle dropdown off immediately
        const dropdown = document.querySelector('.language-dropdown');
        if (dropdown) dropdown.classList.remove('is-open');

        // 1. Set the language via AJAX
        fetch('/language/' + locale)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // 2. Fetch the current page content with the new locale
                    return fetch(window.location.href);
                }
            })
            .then(response => response.text())
            .then(html => {
                // 3. Parse the new HTML
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                // 4. Update the content
                document.body.innerHTML = doc.body.innerHTML;
                document.documentElement.lang = locale;

                // 5. Re-run scripts
                const scripts = doc.querySelectorAll('script');
                scripts.forEach(script => {
                    const newScript = document.createElement('script');
                    if (script.src) {
                        // Avoid reloading jquery if it is already loaded
                        if (!script.src.includes('jquery-')) {
                            newScript.src = script.src;
                            newScript.async = false;
                            document.body.appendChild(newScript);
                        }
                    } else {
                        newScript.textContent = script.textContent;
                        document.body.appendChild(newScript);
                    }
                });

                // Re-init our own selector
                initLanguageSelector();
            })
            .catch(error => console.error('Error switching language:', error));
    };
</script>
