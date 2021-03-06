<?php

namespace Aiwozhe\Rippled\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Aiwozhe\Rippled\Exception\TransactionTypeException;

class TransactionTypeExceptionTest extends TestCase
{
    public function testConstructor(): void
    {
        $obj = new TransactionTypeException('Foo', 1);
        $this->assertEquals('Foo', $obj->getMessage());
    }
}
