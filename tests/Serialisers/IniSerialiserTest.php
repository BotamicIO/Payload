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

use DraperStudio\Payload\Serialisers\IniSerialiser;

/**
 * This is the ini serialiser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class IniSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello = world';
    }

    protected function getSerialiser()
    {
        return new IniSerialiser();
    }
}
