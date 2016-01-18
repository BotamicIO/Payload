<?php

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Unserialisers\YamlUnserialiser;

class YamlReader extends Reader
{
    protected $extensions = ['yaml', 'yml'];

    public function read($path, $class = null)
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
