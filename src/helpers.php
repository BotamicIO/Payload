<?php


use DraperStudio\Payload\Arr;
use DraperStudio\Payload\Csv;
use DraperStudio\Payload\Ini;
use DraperStudio\Payload\Json;
use DraperStudio\Payload\Value;
use DraperStudio\Payload\Xml;
use DraperStudio\Payload\Yaml;
use DraperStudio\Payload\YamlInline;

if (!function_exists('array_serialise')) {
    /**
     * @param $input
     *
     * @return mixed
     */
    function array_serialise($input)
    {
        return (new Arr())->serialise($input);
    }
}

if (!function_exists('array_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function array_unserialise($contents, $class = null)
    {
        return (new Arr())->unserialise($contents, $class);
    }
}

if (!function_exists('array_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function array_read($path, $class = null)
    {
        return (new Arr())->read($path, $class);
    }
}

if (!function_exists('array_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function array_write($path, $input)
    {
        return (new Arr())->write($path, $input);
    }
}

if (!function_exists('csv_serialise')) {
    /**
     * @param $input
     *
     * @return mixed
     */
    function csv_serialise($input)
    {
        return (new Csv())->serialise($input);
    }
}

if (!function_exists('csv_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function csv_unserialise($contents, $class = null)
    {
        return (new Csv())->unserialise($contents, $class);
    }
}

if (!function_exists('csv_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function csv_read($path, $class = null)
    {
        return (new Csv())->read($path, $class);
    }
}

if (!function_exists('csv_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function csv_write($path, $input)
    {
        return (new Csv())->write($path, $input);
    }
}

if (!function_exists('ini_serialise')) {
    /**
     * @param $input
     *
     * @return string
     */
    function ini_serialise($input)
    {
        return (new Ini())->serialise($input);
    }
}

if (!function_exists('ini_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function ini_unserialise($contents, $class = null)
    {
        return (new Ini())->unserialise($contents, $class);
    }
}

if (!function_exists('ini_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function ini_read($path, $class = null)
    {
        return (new Ini())->read($path, $class);
    }
}

if (!function_exists('ini_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function ini_write($path, $input)
    {
        return (new Ini())->write($path, $input);
    }
}

if (!function_exists('json_serialise')) {
    /**
     * @param $input
     *
     * @return mixed
     */
    function json_serialise($input)
    {
        return (new Json())->serialise($input);
    }
}

if (!function_exists('json_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function json_unserialise($contents, $class = null)
    {
        return (new Json())->unserialise($contents, $class);
    }
}

if (!function_exists('json_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function json_read($path, $class = null)
    {
        return (new Json())->read($path, $class);
    }
}

if (!function_exists('json_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function json_write($path, $input)
    {
        return (new Json())->write($path, $input);
    }
}

if (!function_exists('value_serialise')) {
    /**
     * @param $input
     *
     * @return string
     */
    function value_serialise($input)
    {
        return (new Value())->serialise($input);
    }
}

if (!function_exists('value_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function value_unserialise($contents, $class = null)
    {
        return (new Value())->unserialise($contents, $class);
    }
}

if (!function_exists('value_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function value_read($path, $class = null)
    {
        return (new Value())->read($path, $class);
    }
}

if (!function_exists('value_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function value_write($path, $input)
    {
        return (new Value())->write($path, $input);
    }
}

if (!function_exists('xml_serialise')) {
    /**
     * @param $input
     *
     * @return mixed
     */
    function xml_serialise($input)
    {
        return (new Xml())->serialise($input);
    }
}

if (!function_exists('xml_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function xml_unserialise($contents, $class = null)
    {
        return (new Xml())->unserialise($contents, $class);
    }
}

if (!function_exists('xml_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function xml_read($path, $class = null)
    {
        return (new Xml())->read($path, $class);
    }
}

if (!function_exists('xml_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function xml_write($path, $input)
    {
        return (new Xml())->write($path, $input);
    }
}

if (!function_exists('yaml_serialise')) {
    /**
     * @param $input
     *
     * @return string
     */
    function yaml_serialise($input)
    {
        return (new Yaml())->serialise($input);
    }
}

if (!function_exists('yaml_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function yaml_unserialise($contents, $class = null)
    {
        return (new Yaml())->unserialise($contents, $class);
    }
}

if (!function_exists('yaml_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function yaml_read($path, $class = null)
    {
        return (new Yaml())->read($path, $class);
    }
}

if (!function_exists('yaml_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function yaml_write($path, $input)
    {
        return (new Yaml())->write($path, $input);
    }
}

if (!function_exists('yaml_inline_serialise')) {
    /**
     * @param $input
     *
     * @return string
     */
    function yaml_inline_serialise($input)
    {
        return (new YamlInline())->serialise($input);
    }
}

if (!function_exists('yaml_inline_unserialise')) {
    /**
     * @param $contents
     * @param null $class
     *
     * @return mixed
     */
    function yaml_inline_unserialise($contents, $class = null)
    {
        return (new YamlInline())->unserialise($contents, $class);
    }
}

if (!function_exists('yaml_inline_read')) {
    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    function yaml_inline_read($path, $class = null)
    {
        return (new YamlInline())->read($path, $class);
    }
}

if (!function_exists('yaml_inline_write')) {
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    function yaml_inline_write($path, $input)
    {
        return (new YamlInline())->write($path, $input);
    }
}
