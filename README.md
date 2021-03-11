# Catalog/Ko

Adds one option in admin configuration to add google font url for CSP settings.

## Composer install

- `composer config repositories.reponame vcs https://github.com/vac19/CSP-admin-option`
- `composer require salecto2/magento2-csp`

## Composer uninstall

- `composer remove salecto2/magento2-csp`

## Preview will be added

![timer-in-categoryPage](/readme-images/Timer-at-categoryPage.png "timer-in-categoryPage")


## Settings

- Option `will be updated ..` - Under Construction

## Known issues

- **Issues will be here .. Hopfuly not**\
  Woirk in Progress

## Developer informations
- vashishtha chauhan / Salecto

### Install module
1. Run `composer require salecto2/magento2-csp`
2. Run `php bin/magento setup:upgrade`
3. Run `php bin/magento setup:di:compile`
4. Run `php bin/magento s:s:d da_DK en_US`
5. Run `php bin/magento c:c`

### Uninstall module
1. Run `composer remove salecto2/magento2-csp`
2. Run `php bin/magento setup:di:compile`
3. Run `php bin/magento s:s:d da_DK en_US`
4. Run `php bin/magento c:c`

### Additional developer notes
Reference URL `https://devdocs.magento.com/guides/v2.4/extension-dev-guide/security/content-security-policies.html`
