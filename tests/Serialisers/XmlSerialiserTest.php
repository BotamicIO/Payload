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

use DraperStudio\Payload\Serialisers\XmlSerialiser;

/**
 * This is the xml serialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class XmlSerialiserTest extends AbstractTestCase
{
    /** @test */
    public function should_serialise_input()
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertXmlStringEqualsXmlString($this->getExpectedOutput(), $contents);
    }

    protected function getExpectedOutput()
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getSerialiser()
    {
        return new XmlSerialiser();
    }
}
