# Payload

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/payload
```

## Usage

##### Serialise an input

``` php
(new Arr())->serialise($input);
(new Csv())->serialise($input);
(new Ini())->serialise($input);
(new Json())->serialise($input);
(new Value())->serialise($input);
(new Xml())->serialise($input);
(new Yaml())->serialise($input);
(new YamlInline())->serialise($input);
```

##### Unserialise an input

``` php
(new Arr())->unserialise($contents, $class);
(new Csv())->unserialise($contents, $class);
(new Ini())->unserialise($contents, $class);
(new Json())->unserialise($contents, $class);
(new Value())->unserialise($contents, $class);
(new Xml())->unserialise($contents, $class);
(new Yaml())->unserialise($contents, $class);
```

##### Read a file and unserialise its contents

``` php
(new Arr())->read($path, $class);
(new Csv())->read($path, $class);
(new Ini())->read($path, $class);
(new Json())->read($path, $class);
(new Value())->read($path, $class);
(new Xml())->read($path, $class);
(new Yaml())->read($path, $class);
```

##### Serialise an input and write it into a file

``` php
(new Arr())->write($path, $input);
(new Csv())->write($path, $input);
(new Ini())->write($path, $input);
(new Json())->write($path, $input);
(new Value())->write($path, $input);
(new Xml())->write($path, $input);
(new Yaml())->write($path, $input);
(new YamlInline())->write($path, $input);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/payload.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Payload/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/payload.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/payload.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/payload.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/payload
[link-travis]: https://travis-ci.org/DraperStudio/Payload
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/payload/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/payload
[link-downloads]: https://packagist.org/packages/DraperStudio/payload
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
