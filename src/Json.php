<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload;

use BrianFaust\Payload\Normalisers\JsonNormaliser;

class Json
{
    protected $normaliser;

    public function __construct()
    {
        $this->normaliser = new JsonNormaliser();
    }

    public function serialise($input): string
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise($input, ?string $class = null): array
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    public function write($path, $input): bool
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read($input, ?string $class = null): array
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
