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
use DraperStudio\Payload\Readers\ValueReader;
use DraperStudio\Payload\Serialisers\ValueSerialiser;
use DraperStudio\Payload\Unserialisers\ValueUnserialiser;
use DraperStudio\Payload\Writers\ValueWriter;

/**
 * Class ValueNormaliser.
 */
class ValueNormaliser implements Normaliser
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
     * @return ValueSerialiser
     */
    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new ValueSerialiser();
    }

    /**
     * @return ValueUnserialiser
     */
    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new ValueUnserialiser();
    }

    /**
     * @return ValueWriter
     */
    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new ValueWriter();
    }

    /**
     * @return ValueReader
     */
    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new ValueReader();
    }
}
