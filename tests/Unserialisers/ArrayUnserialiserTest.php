<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return "array ( 'hello' => 'world', )";
    }

    protected function getUnserialiser(): ArrayUnserialiser
    {
        return new ArrayUnserialiser();
    }
}
