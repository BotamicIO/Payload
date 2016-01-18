<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;

class ValueUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $contents = unserialize($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
