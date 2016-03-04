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

use DraperStudio\Payload\Contracts\Unserialiser;

/**
 * This is the abstract test case class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_unserialiser()
    {
        $unserialiser = $this->getUnserialiser();

        $this->assertInstanceOf(Unserialiser::class, $unserialiser);
    }

    /** @test */
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    abstract protected function getUnserialiser();
    abstract protected function getInput();
}
