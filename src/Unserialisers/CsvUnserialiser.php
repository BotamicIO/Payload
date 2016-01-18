<?php

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;
use League\Csv\Reader;

class CsvUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $reader = Reader::createFromString($input);

        $contents = $reader->fetchAll();

        for ($i = 0; $i < count($contents); ++$i) {
            if ($i <= 0) {
                continue;
            }

            $contents[$i] = array_combine($contents[0], $contents[$i]);
        }

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
