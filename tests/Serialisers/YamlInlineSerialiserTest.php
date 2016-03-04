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

use DraperStudio\Payload\Serialisers\YamlInlineSerialiser;

/**
 * This is the yaml-inline serialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class YamlInlineSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return "hello: world\n";
    }

    protected function getSerialiser()
    {
        return new YamlInlineSerialiser();
    }
}
