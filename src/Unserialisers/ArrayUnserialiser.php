<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;

class ArrayUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $input = eval("return $input;");

        if (!is_null($class)) {
            return (new Mapper())->map($input, $class);
        }

        return $input;
    }
}
