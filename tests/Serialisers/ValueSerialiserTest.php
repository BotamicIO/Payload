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

use DraperStudio\Payload\Serialisers\ValueSerialiser;

/**
 * This is the value serialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ValueSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getSerialiser()
    {
        return new ValueSerialiser();
    }
}
