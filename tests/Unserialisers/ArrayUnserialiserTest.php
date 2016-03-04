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

use DraperStudio\Payload\Unserialisers\ArrayUnserialiser;

/**
 * This is the array unserialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ArrayUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return "array ( 'hello' => 'world', )";
    }

    protected function getUnserialiser()
    {
        return new ArrayUnserialiser();
    }
}
