<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return 'hello = world';
    }

    protected function getUnserialiser(): IniUnserialiser
    {
        return new IniUnserialiser();
    }
}
