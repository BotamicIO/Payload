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

use DraperStudio\Payload\Unserialisers\YamlUnserialiser;

/**
 * Class YamlReader.
 */
class YamlReader extends Reader
{
    /**
     * @var array
     */
    protected $extensions = ['yaml', 'yml'];

    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    public function read($path, $class = null)
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
