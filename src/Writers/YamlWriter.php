<?php

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\YamlSerialiser;

class YamlWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new YamlSerialiser())->serialise($input));
    }
}
