<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Exceptions\InvalidFileTypeException;
use BrianFaust\Payload\Readers\Reader;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_reader(): void
    {
        $reader = $this->getReader();

        $this->assertInstanceOf(Reader::class, $reader);
    }

    public function should_read_file(): void
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    public function should_throw_exception_when_invalid_file_type(): void
    {
        $this->setExpectedException(InvalidFileTypeException::class);

        $reader = $this->getReader();

        $reader->read('invalid.txt');
    }

    abstract protected function getReader();

    abstract protected function getFileExtension();
}
