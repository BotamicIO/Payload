<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Unserialisers\XmlUnserialiser;

/**
 * Class XmlReader.
 */
class XmlReader extends Reader
{
    /**
     * @var array
     */
    protected $extensions = ['xml'];

    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    public function read($path, $class = null)
    {
        return (new XmlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
