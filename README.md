# GDPR Cookie Consent Manager for Laravel 12

A modern, flexible, and production-ready GDPR Cookie Consent Manager package for Laravel 12.

## Features
- Customizable Cookie Consent Banner
- Consent Logging
- Admin Panel
- Auto-blocking of Scripts
- Localization
- Easy Integration
- Geo-targeting (Optional)
- Artisan Maintenance Commands

## Installation

1. Require the package:
   ```bash
   composer require vendor/gdpr-cookie-consent-manager
   ```
2. Publish assets & config:
   ```bash
   php artisan vendor:publish --provider="Vendor\GdprCookieConsentManager\Providers\GdprCookieServiceProvider"
   ```
3. Run migrations:
   ```bash
   php artisan migrate
   ```

## Usage

- Add `@gdprCookieConsent` Blade directive before `</body>` in your layout.
- Access admin panel at `/gdpr-cookie-admin` (configurable).
- Manage banner, categories, and logs from the admin panel.

## Customization

- Edit `config/gdprcookie.php` for appearance, categories, and settings.
- Add or edit translations in `lang/{locale}/messages.php`.
- Override views by publishing them and editing in `resources/views/vendor/gdprcookie/`.

## Troubleshooting

- Ensure you have run migrations and published assets.
- Check config and language files for missing keys.
- For help, contact [kzaman3055@gmail.com](mailto:kzaman3055@gmail.com).

## License

This project is open source under the MIT License. See the LICENSE file for details.
