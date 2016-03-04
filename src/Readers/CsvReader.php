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

use DraperStudio\Payload\Unserialisers\CsvUnserialiser;

/**
 * Class CsvReader.
 */
class CsvReader extends Reader
{
    /**
     * @var array
     */
    protected $extensions = ['csv'];

    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    public function read($path, $class = null)
    {
        return (new CsvUnserialiser())->unserialise($this->contents($path), $class);
    }
}
