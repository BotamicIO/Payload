<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\Writer;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_writer(): void
    {
        $writer = $this->getWriter();

        $this->assertInstanceOf(Writer::class, $writer);
    }

    public function should_write_file(): void
    {
        $writer = $this->getWriter();

        $tempFile = tempnam(sys_get_temp_dir(), 'prefix');

        $result = $writer->write($tempFile, ['hello' => 'world']);

        $this->assertTrue($result);
    }

    abstract protected function getWriter();
}
