<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Normalisers;

use DraperStudio\Payload\Contracts\Normaliser;
use DraperStudio\Payload\Readers\JsonReader;
use DraperStudio\Payload\Serialisers\JsonSerialiser;
use DraperStudio\Payload\Unserialisers\JsonUnserialiser;
use DraperStudio\Payload\Writers\JsonWriter;

/**
 * Class JsonNormaliser.
 */
class JsonNormaliser implements Normaliser
{
    /**
     * @var
     */
    protected $serialiser;

    /**
     * @var
     */
    protected $unserialiser;

    /**
     * @var
     */
    protected $writer;

    /**
     * @var
     */
    protected $reader;

    /**
     * @return JsonSerialiser
     */
    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new JsonSerialiser();
    }

    /**
     * @return JsonUnserialiser
     */
    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new JsonUnserialiser();
    }

    /**
     * @return JsonWriter
     */
    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new JsonWriter();
    }

    /**
     * @return JsonReader
     */
    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new JsonReader();
    }
}
