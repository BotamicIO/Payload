<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Unserialisers;

use DraperStudio\Payload\Unserialisers\CsvUnserialiser;

/**
 * This is the csv unserialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CsvUnserialiserTest extends AbstractTestCase
{
    /** @test */
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getInput()
    {
        return 'hello
world
';
    }

    protected function getUnserialiser()
    {
        return new CsvUnserialiser();
    }
}
