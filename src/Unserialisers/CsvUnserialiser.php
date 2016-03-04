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
use League\Csv\Reader;

/**
 * Class CsvUnserialiser.
 */
class CsvUnserialiser implements Unserialiser
{
    /**
     * @param $input
     * @param null $class
     *
     * @return mixed
     */
    public function unserialise($input, $class = null)
    {
        $reader = Reader::createFromString($input);

        $contents = $reader->fetchAll();

        // @deprecated for the moment
        // for ($i = 0; $i < count($contents); ++$i) {
        //     if ($i <= 0) {
        //         continue;
        //     }
        //
        //     $contents[$i] = array_combine($contents[0], $contents[$i]);
        // }

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
