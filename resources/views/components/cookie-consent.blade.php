<div id="cookie-consent" class="cookie-consent" style="display: none;">
    <div class="cookie-consent-inner">
        <div class="cookie-content">
            <h3 data-i18n="messages.cookie_title">{{ __('messages.cookie_title') }}</h3>
            <p data-i18n="messages.cookie_message">{{ __('messages.cookie_message') }}</p>
        </div>
        <div class="cookie-actions">
            <button id="cookie-reject" class="btn btn-secondary"
                data-i18n="messages.cookie_reject">{{ __('messages.cookie_reject') }}</button>
            <button id="cookie-accept" class="btn btn-primary"
                data-i18n="messages.cookie_accept">{{ __('messages.cookie_accept') }}</button>
        </div>
    </div>
</div>

<style>
    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #2c3e50;
        color: #fff;
        padding: 20px;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        animation: slideUp 0.3s ease-in-out;
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    @keyframes slideUp {
        from {
            transform: translateY(100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .cookie-consent-inner {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .cookie-content h3 {
        margin: 0 0 10px 0;
        font-size: 18px;
        font-weight: 600;
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .cookie-content p {
        margin: 0;
        font-size: 14px;
        line-height: 1.5;
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .cookie-actions {
        display: flex;
        gap: 10px;
        flex-shrink: 0;
    }

    .cookie-actions button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .cookie-actions .btn-primary {
        background: var(--primary-color-one, #ff6b35);
        color: #fff;
    }

    .cookie-actions .btn-primary:hover {
        opacity: 0.9;
    }

    .cookie-actions .btn-secondary {
        background: transparent;
        color: #fff;
        border: 1px solid #fff;
    }

    .cookie-actions .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    @media (max-width: 768px) {
        .cookie-consent-inner {
            flex-direction: column;
            align-items: flex-start;
        }

        .cookie-actions {
            width: 100%;
        }

        .cookie-actions button {
            flex: 1;
        }
    }
</style>

<script>
    (function() {
        const COOKIE_CONSENT_KEY = 'proxel_cookie_consent';
        const COOKIE_CONSENT_EXPIRY = 365; // days

        function showCookieConsent() {
            const consent = localStorage.getItem(COOKIE_CONSENT_KEY);
            if (!consent) {
                document.getElementById('cookie-consent').style.display = 'block';
            }
        }

        function setCookieConsent(accepted) {
            const expiryDate = new Date();
            expiryDate.setDate(expiryDate.getDate() + COOKIE_CONSENT_EXPIRY);

            localStorage.setItem(COOKIE_CONSENT_KEY, 'true');

            if (accepted) {
                // Set actual cookies or tracking code here if needed
                console.log('Cookies accepted');
            } else {
                console.log('Cookies rejected');
            }

            hideCookieConsent();
        }

        function hideCookieConsent() {
            const banner = document.getElementById('cookie-consent');
            banner.style.animation = 'slideUp 0.3s ease-in-out reverse';
            setTimeout(() => {
                banner.style.display = 'none';
            }, 300);
        }

        // Event listeners
        document.getElementById('cookie-accept').addEventListener('click', function() {
            setCookieConsent(true);
        });

        document.getElementById('cookie-reject').addEventListener('click', function() {
            setCookieConsent(false);
        });

        // Show consent on page load
        document.addEventListener('DOMContentLoaded', showCookieConsent);
    })();
</script>
