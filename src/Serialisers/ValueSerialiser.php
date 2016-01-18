<?php

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;

class ValueSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return serialize($input);
    }
}
