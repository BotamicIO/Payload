<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

/**
 * Class JsonSerialiser.
 */
class JsonSerialiser implements Serialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialise($input)
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()], [new JsonEncoder()]
        ))->serialize($input, 'json');
    }
}
