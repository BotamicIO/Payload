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

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;

class CsvUnserialiserTest extends TestCase
{
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getInput(): string
    {
        return 'hello
world
';
    }

    protected function getUnserialiser(): CsvUnserialiser
    {
        return new CsvUnserialiser();
    }
}
