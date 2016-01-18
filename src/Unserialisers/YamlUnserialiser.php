<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;
use Symfony\Component\Yaml\Yaml;

class YamlUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $contents = Yaml::parse($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
