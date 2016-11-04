<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\XmlSerialiser;

class XmlSerialiserTest extends AbstractTestCase
{
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
