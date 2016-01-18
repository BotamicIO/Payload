<?php

namespace DraperStudio\Payload\Normalisers;

use DraperStudio\Payload\Contracts\Normaliser;
use DraperStudio\Payload\Readers\IniReader;
use DraperStudio\Payload\Serialisers\IniSerialiser;
use DraperStudio\Payload\Unserialisers\IniUnserialiser;
use DraperStudio\Payload\Writers\IniWriter;

class IniNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new IniSerialiser();
    }

    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new IniUnserialiser();
    }

    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new IniWriter();
    }

    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new IniReader();
    }
}
