<?php

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\JsonSerialiser;

class JsonWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new JsonSerialiser())->serialise($input));
    }
}
