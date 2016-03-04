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
use DraperStudio\Payload\Readers\ArrayReader;
use DraperStudio\Payload\Serialisers\ArraySerialiser;
use DraperStudio\Payload\Unserialisers\ArrayUnserialiser;
use DraperStudio\Payload\Writers\ArrayWriter;

/**
 * Class ArrayNormaliser.
 */
class ArrayNormaliser implements Normaliser
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
     * @return ArraySerialiser
     */
    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new ArraySerialiser();
    }

    /**
     * @return ArrayUnserialiser
     */
    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new ArrayUnserialiser();
    }

    /**
     * @return ArrayWriter
     */
    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new ArrayWriter();
    }

    /**
     * @return ArrayReader
     */
    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new ArrayReader();
    }
}
