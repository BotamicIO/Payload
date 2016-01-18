<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;

class XmlUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $contents = json_decode(json_encode(simplexml_load_string($input)));

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
