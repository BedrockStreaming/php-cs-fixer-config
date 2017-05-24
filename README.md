# php-cs-fixer-config

[`PHP CS Fixer`](http://github.com/FriendsOfPHP/PHP-CS-Fixer) config for M6Web components.

## Installation

Run

```
$ composer require --dev m6web/php-cs-fixer-config
```

## Usage

### Configuration

Create a configuration file `.php_cs` in the root of your project:

```php
<?php

$config = new M6Web\CS\Config\Php71;

$config->getFinder()
    ->in([
        __DIR__.'/src'
    ])->exclude([
        'Tests'
    ]);

return $config;
```

### Git

Add `.php_cs.cache` (this is the cache file created by `php-cs-fixer`) to `.gitignore`:

```
vendor/
.php_cs.cache
```

### Makefile

Create a `Makefile` with the targets below:

```Makefile
# Coding Style

cs:
	./bin/php-cs-fixer fix --dry-run --stop-on-violation --diff

cs-fix:
	./bin/php-cs-fixer fix

cs-ci:
	./bin/php-cs-fixer fix --dry-run --using-cache=no --verbose
```

## Fixing issues

### Manually

If you need to **check** issues locally, just run

```
$ make cs
```

If you need to **fix** issues locally, just run

```
$ make cs-fix
```

In your Continuous Integration, run

```
$ make cs-ci
```

## Credits

Developed by [M6Web](http://tech.m6web.fr/), inspired by [refinery29/php-cs-fixer-config](https://github.com/refinery29/php-cs-fixer-config).

## License

This project is licensed under the [MIT license](LICENSE).
