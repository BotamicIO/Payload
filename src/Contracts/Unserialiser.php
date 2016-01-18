<?php

namespace DraperStudio\Payload\Contracts;

interface Unserialiser
{
    public function unserialise($input, $class = null);
}
