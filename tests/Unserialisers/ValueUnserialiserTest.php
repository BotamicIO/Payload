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

use DraperStudio\Payload\Unserialisers\ValueUnserialiser;

/**
 * This is the value unserialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ValueUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getUnserialiser()
    {
        return new ValueUnserialiser();
    }
}
