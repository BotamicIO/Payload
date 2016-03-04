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

use DraperStudio\Payload\Readers\CsvReader;

/**
 * This is the csv reader test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CsvReaderTest extends AbstractTestCase
{
    /** @test */
    public function should_read_file()
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getFileExtension()
    {
        return 'csv';
    }

    protected function getReader()
    {
        return new CsvReader();
    }
}
