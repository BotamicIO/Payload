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
use DraperStudio\Payload\Readers\XmlReader;
use DraperStudio\Payload\Serialisers\XmlSerialiser;
use DraperStudio\Payload\Unserialisers\XmlUnserialiser;
use DraperStudio\Payload\Writers\XmlWriter;

/**
 * Class XmlNormaliser.
 */
class XmlNormaliser implements Normaliser
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
     * @return XmlSerialiser
     */
    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new XmlSerialiser();
    }

    /**
     * @return XmlUnserialiser
     */
    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new XmlUnserialiser();
    }

    /**
     * @return XmlWriter
     */
    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new XmlWriter();
    }

    /**
     * @return XmlReader
     */
    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new XmlReader();
    }
}
