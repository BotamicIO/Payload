<?php

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;
use DraperStudio\Payload\Utils\IniBuilder;

class IniSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new IniBuilder())->build($input);
    }
}
