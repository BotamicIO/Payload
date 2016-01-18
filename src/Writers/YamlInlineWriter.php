<?php

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\YamlInlineSerialiser;

class YamlInlineWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new YamlInlineSerialiser())->serialise($input));
    }
}
