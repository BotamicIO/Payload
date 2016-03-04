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
use DraperStudio\Payload\Readers\CsvReader;
use DraperStudio\Payload\Serialisers\CsvSerialiser;
use DraperStudio\Payload\Unserialisers\CsvUnserialiser;
use DraperStudio\Payload\Writers\CsvWriter;

/**
 * Class CsvNormaliser.
 */
class CsvNormaliser implements Normaliser
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
     * @return CsvSerialiser
     */
    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new CsvSerialiser();
    }

    /**
     * @return CsvUnserialiser
     */
    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new CsvUnserialiser();
    }

    /**
     * @return CsvWriter
     */
    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new CsvWriter();
    }

    /**
     * @return CsvReader
     */
    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new CsvReader();
    }
}
