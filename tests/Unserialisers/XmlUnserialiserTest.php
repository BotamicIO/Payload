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

use DraperStudio\Payload\Unserialisers\XmlUnserialiser;

/**
 * This is the xml unserialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class XmlUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getUnserialiser()
    {
        return new XmlUnserialiser();
    }
}
