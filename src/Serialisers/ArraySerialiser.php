<?php

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;

class ArraySerialiser implements Serialiser
{
    public function serialise($input)
    {
        return var_export($input, true);
    }
}
