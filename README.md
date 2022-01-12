# This package for raspberry pi relay switch

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nerdmonkey/relay-switch.svg?style=flat-square)](https://packagist.org/packages/nerdmonkey/relay-switch)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nerdmonkey/relay-switch/run-tests?label=tests)](https://github.com/nerdmonkey/relay-switch/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/nerdmonkey/relay-switch/Check%20&%20fix%20styling?label=code%20style)](https://github.com/nerdmonkey/relay-switch/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nerdmonkey/relay-switch.svg?style=flat-square)](https://packagist.org/packages/nerdmonkey/relay-switch)

## Installation

You can install the package via composer:

```bash
composer require nerdmonkey/relay-switch
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="relay-switch-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="relay-switch-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="relay-switch-views"
```

## Usage

```php
$relaySwitch = new Nerdmonkey\RelaySwitch();
echo $relaySwitch->echoPhrase('Hello, Nerdmonkey!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sydel Palinlin](https://github.com/nerdmonkey)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
