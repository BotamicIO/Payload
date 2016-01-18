<?php

namespace DraperStudio\Payload\Contracts;

interface Normaliser
{
    public function serialiser();

    public function unserialiser();

    public function writer();

    public function reader();
}
