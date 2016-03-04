<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Writers;

use DraperStudio\Payload\Writers\CsvWriter;

/**
 * This is the csv writer test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CsvWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new CsvWriter();
    }
}
