<?php

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Unserialisers\ValueUnserialiser;

class ValueReader extends Reader
{
    public function read($path, $class = null)
    {
        return (new ValueUnserialiser())->unserialise($this->contents($path), $class);
    }
}
