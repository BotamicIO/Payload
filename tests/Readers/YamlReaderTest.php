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

use DraperStudio\Payload\Readers\YamlReader;

/**
 * This is the yaml reader test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class YamlReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'yml';
    }

    protected function getReader()
    {
        return new YamlReader();
    }
}
