<?php

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\ArraySerialiser;

class ArrayWriter extends Writer
{
    public function write($path, $input)
    {
        $contents = (new ArraySerialiser())->serialise($input);

        return $this->put($path, "<?php


 return $contents;");
    }
}
