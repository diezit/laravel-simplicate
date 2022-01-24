# Laravel Simplicate API Client

For communicating with the Simplicate API.

W.I.P.

## Version Compatibility

Laravel             | Package
:--------------------|:--------
5.3.x and older     | 0.9.x

## Installation

Via Composer:

``` bash
$ composer require CrixuAMG/laravel-simplicate
```

If you don't use auto-discover, register the Service Provider in your `config/app.php`:

```php
<?php
    'providers' => [
        // ...
        CrixuAMG\Simplicate\Providers\SimplicateServiceProvider::class,
    ],
```

Publish the configuration file:

``` bash
php artisan vendor:publish --provider="CrixuAMG\Simplicate\Providers\SimplicateServiceProvider"
```

## Configuration

Set up your `.env` file for the following values:

```dotenv
SIMPLICATE_DOMAIN=yoursimplicatesubdomain
SIMPLICATE_API_KEY=yoursimplicateapikey
SIMPLICATE_API_SECRET=yoursimplicateapisecret
```

## Usage

To Do.

### Fluent list syntax

For filterable, orderable listings, you can use fluent syntax to set parameters:

```php
<?php
/** @var \CrixuAMG\Simplicate\Services\SimplicateService $service */
$leaveRecords = $service->hrm()
    ->offset(2)
    ->limit(10)
    ->sort('start_date')->descending()
    ->filter(['employee.id' => 'employee:aa24f3857730be716d44e34a3f0f8c3a'])
    ->allLeave();
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/CrixuAMG/laravel-simplicate.svg?style=flat-square

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[ico-downloads]: https://img.shields.io/packagist/dt/CrixuAMG/laravel-simplicate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/CrixuAMG/laravel-simplicate

[link-downloads]: https://packagist.org/packages/CrixuAMG/laravel-simplicate

[link-author]: https://github.com/CrixuAMG

[link-contributors]: ../../contributors
