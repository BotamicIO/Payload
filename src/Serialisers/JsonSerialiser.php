<?php

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

class JsonSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()], [new JsonEncoder()]
        ))->serialize($input, 'json');
    }
}
