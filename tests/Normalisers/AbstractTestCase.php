<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Normalisers;

use DraperStudio\Payload\Contracts\Serialiser;
use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Readers\Reader;
use DraperStudio\Payload\Writers\Writer;

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
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    }

    /** @test */
    public function should_return_unserialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Unserialiser::class, $normaliser->unserialiser());
    }

    /** @test */
    public function should_return_reader()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Reader::class, $normaliser->reader());
    }

    /** @test */
    public function should_return_writer()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Writer::class, $normaliser->writer());
    }

    abstract protected function getNormaliser();
}
