<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Readers;

use DraperStudio\Payload\Readers\ValueReader;

/**
 * This is the vlaue reader test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ValueReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'ser';
    }

    protected function getReader()
    {
        return new ValueReader();
    }
}
