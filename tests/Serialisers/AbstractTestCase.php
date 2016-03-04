<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;

/**
 * This is the abstract test case class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_serialiser()
    {
        $serialiser = $this->getSerialiser();

        $this->assertInstanceOf(Serialiser::class, $serialiser);
    }

    /** @test */
    public function should_serialise_input()
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertEquals($this->getExpectedOutput(), $contents);
    }

    abstract protected function getSerialiser();
    abstract protected function getExpectedOutput();
}
