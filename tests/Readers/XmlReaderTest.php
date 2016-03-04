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

use DraperStudio\Payload\Readers\XmlReader;

/**
 * This is the xml reader test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class XmlReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'xml';
    }

    protected function getReader()
    {
        return new XmlReader();
    }
}
