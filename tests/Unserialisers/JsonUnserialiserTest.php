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

use DraperStudio\Payload\Unserialisers\JsonUnserialiser;

/**
 * This is the json unserialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class JsonUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return '{"hello":"world"}';
    }

    protected function getUnserialiser()
    {
        return new JsonUnserialiser();
    }
}
