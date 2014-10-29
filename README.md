sendgrid-newsletter
=======================

Laravel 4 wrapper of the sendgrid newsletter php library.

- **Author:** Leo Shin
- **Version:** 0.9.0

## Installation

To install the API add this to your composer.json:

```json
"require": {
        "lshin/sendgrid-newsletter": "0.*"
}
```

..then run `composer update`. (If you have problems getting that to work, try running `php artisan dump-autoload` followed by `composer update` again).

Register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => array(
    //...
    'Lshin\SendgridNewsletter\SendgridNewsletterServiceProvider',
)
```

Then create the config file `app/config/sendgridnewsletter.php` based on the config file in the package.
```php
<?php
    return array(
        /**
         * Sendgrid API
         */
        'api_user' => '',
        'api_key' => ''
    );

```

## Documentation

Now, you can access the SendgridNewsletter API by calling the `SendgridNewsletter::` facade.
For more information on the available commands, see https://github.com/Neoseeker/SendGrid-PHP-Library