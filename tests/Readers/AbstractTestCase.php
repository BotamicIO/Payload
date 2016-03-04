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

use DraperStudio\Payload\Readers\Reader;
use DraperStudio\Payload\Exceptions\InvalidFileTypeException;

/**
 * This is the abstract test case class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_reader()
    {
        $reader = $this->getReader();

        $this->assertInstanceOf(Reader::class, $reader);
    }

    /** @test */
    public function should_read_file()
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    /** @test */
    public function should_throw_exception_when_invalid_file_type()
    {
        $this->setExpectedException(InvalidFileTypeException::class);

        $reader = $this->getReader();

        $reader->read('invalid.txt');
    }

    abstract protected function getReader();

    abstract protected function getFileExtension();
}
