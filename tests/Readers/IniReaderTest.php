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

use DraperStudio\Payload\Readers\IniReader;

/**
 * This is the ini reader test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class IniReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'ini';
    }

    protected function getReader()
    {
        return new IniReader();
    }
}
