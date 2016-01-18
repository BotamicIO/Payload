<?php

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\CsvSerialiser;

class CsvWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new CsvSerialiser())->serialise($input));
    }
}
