<?php

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Unserialisers\JsonUnserialiser;

class JsonReader extends Reader
{
    protected $extensions = ['json'];

    public function read($path, $class = null)
    {
        return (new JsonUnserialiser())->unserialise($this->contents($path), $class);
    }
}
