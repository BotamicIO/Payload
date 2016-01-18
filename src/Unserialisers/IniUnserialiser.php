<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;

class IniUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $contents = json_decode(json_encode(parse_ini_string($input, true)));

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
