<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;

/**
 * Class XmlUnserialiser.
 */
class XmlUnserialiser implements Unserialiser
{
    /**
     * @param $input
     * @param null $class
     *
     * @return mixed
     */
    public function unserialise($input, $class = null)
    {
        $contents = json_decode(json_encode(simplexml_load_string($input, null, LIBXML_NOCDATA)));

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
