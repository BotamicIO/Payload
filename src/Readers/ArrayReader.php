<?php

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Unserialisers\ArrayUnserialiser;

class ArrayReader extends Reader
{
    protected $extensions = ['php'];

    public function read($path, $class = null)
    {
        return (new ArrayUnserialiser())->unserialise($this->get($path), $class);
    }
}
