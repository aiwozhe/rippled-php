<?php

namespace Aiwozhe\Rippled\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Aiwozhe\Rippled\Exception\TransactionException;

class TransactionExceptionTest extends TestCase
{
    public function testConstructor(): void
    {
        $obj = new TransactionException('Foo', 1);
        $this->assertEquals('Foo', $obj->getMessage());
    }
}
