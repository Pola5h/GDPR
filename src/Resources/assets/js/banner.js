// JS for GDPR Cookie Consent Banner
// Minified and versioned for production in real build process

/**
 * Auto-blocking: Replace <script type="text/plain" data-cookie-category="analytics">...</script>
 * with real script tags after consent is given.
 */
function enableConsentedScripts(consentedCategories) {
    document.querySelectorAll('script[type="text/plain"]').forEach(function(script) {
        var category = script.getAttribute('data-cookie-category');
        if (consentedCategories.includes(category)) {
            var s = document.createElement('script');
            if (script.src) s.src = script.src;
            s.innerHTML = script.innerHTML;
            Array.from(script.attributes).forEach(attr => {
                if (!['type', 'data-cookie-category'].includes(attr.name)) {
                    s.setAttribute(attr.name, attr.value);
                }
            });
            s.type = 'text/javascript';
            script.parentNode.replaceChild(s, script);
        }
    });
}
// Call enableConsentedScripts(['analytics', ...]) after user gives consent

/**
 * Geo-targeting: Only show the banner to users from the EU.
 * Uses ipapi.co for free IP geolocation. You can replace with another API if needed.
 */
function showBannerForEU(callback) {
    fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
            const euCountries = [
                'AT','BE','BG','HR','CY','CZ','DK','EE','FI','FR','DE','GR','HU','IE','IT','LV','LT','LU','MT','NL','PL','PT','RO','SK','SI','ES','SE'
            ];
            if (euCountries.includes(data.country_code)) {
                callback(true);
            } else {
                callback(false);
            }
        })
        .catch(() => callback(true)); // fallback: show to all if API fails
}
// Usage example:
// showBannerForEU(function(isEU) {
//   if (isEU) document.getElementById('gdpr-cookie-banner').style.display = 'block';
//   else document.getElementById('gdpr-cookie-banner').style.display = 'none';
// });
