# Payload

Based on [Payload](https://github.com/philipbrown/payload) by [philipbrown](https://github.com/philipbrown).

## New Features

- Serialisers **(JSON, XML, YAML, INI, CSV, Array and Value)**
- Writers **(JSON, XML, YAML, INI, CSV, Array and Value)**
- Bind unserialised Data to an Object via [netresearch/jsonmapper](https://github.com/netresearch/jsonmapper)

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/payload:1.0.*@dev
```

## Usage

##### Serialise an input

```php
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

```php
(new Arr())->unserialise($contents, $class);
(new Csv())->unserialise($contents, $class);
(new Ini())->unserialise($contents, $class);
(new Json())->unserialise($contents, $class);
(new Value())->unserialise($contents, $class);
(new Xml())->unserialise($contents, $class);
(new Yaml())->unserialise($contents, $class);
```

##### Read a file and unserialise its contents

```php
(new Arr())->read($path, $class);
(new Csv())->read($path, $class);
(new Ini())->read($path, $class);
(new Json())->read($path, $class);
(new Value())->read($path, $class);
(new Xml())->read($path, $class);
(new Yaml())->read($path, $class);
```

##### Serialise an input and write it into a file

```php
(new Arr())->write($path, $input);
(new Csv())->write($path, $input);
(new Ini())->write($path, $input);
(new Json())->write($path, $input);
(new Value())->write($path, $input);
(new Xml())->write($path, $input);
(new Yaml())->write($path, $input);
(new YamlInline())->write($path, $input);
```

## To-Do
- [ ] Replace [netresearch/jsonmapper](https://github.com/netresearch/jsonmapper) with [incoming/incoming](https://github.com/Rican7/incoming)

## License

Payload is licensed under [The MIT License (MIT)](LICENSE).
