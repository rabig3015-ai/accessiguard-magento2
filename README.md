# AccessiGuard WCAG Accessibility Widget for Magento 2

`saguntech/module-accessiguard` (`SagunTech_AccessiGuard`) integrates the ultra-lightweight (<6KB gzipped) **AccessiGuard** WCAG 2.2 AA, ADA, and EAA accessibility widget and live DOM auditor into Magento 2 / Adobe Commerce storefronts.

## Features

- **Zero External Dependencies**: Vanilla JS engine with Shadow DOM isolation so storefront themes (Luma, Hyvä, custom themes) never clash with widget styles.
- **10 Assistive Controls**: Font scaling, high contrast, dark mode, grayscale, link highlighting, dyslexia-friendly font, pause animations, big cursor, focus ring, and reading guide.
- **Live WCAG 2.2 DOM Auditor**: Built-in on-page accessibility check for alt attributes, heading hierarchy, form labels, landmarks, and links.
- **Multi-Store Configuration**: Configure enable state, corner placement (`bottom-right` or `bottom-left`), accent color (`#2563eb` default), and attribution per store view.

## Installation

### Via Composer

```bash
composer require saguntech/module-accessiguard:^1.0
bin/magento module:enable SagunTech_AccessiGuard
bin/magento setup:upgrade
bin/magento cache:flush
```

### Manual Installation

1. Copy this module directory to `app/code/SagunTech/AccessiGuard/`.
2. Run:
   ```bash
   bin/magento module:enable SagunTech_AccessiGuard
   bin/magento setup:upgrade
   bin/magento setup:static-content:deploy -f
   bin/magento cache:flush
   ```

## Configuration

In the Magento Admin panel, navigate to:

**Stores -> Configuration -> SagunTech -> AccessiGuard Accessibility Widget**

- **Enable Accessibility Widget**: Yes / No (default: Yes)
- **Widget Position**: Bottom Right / Bottom Left (default: Bottom Right)
- **Accent Color**: Hex color code (default: `#2563eb`)
- **Show Powered By Footer**: Yes / No (default: No)

## License

GPL-2.0-or-later
