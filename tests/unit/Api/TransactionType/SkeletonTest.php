<?php

namespace Aiwozhe\Rippled\Tests\Transaction\Type;

use PHPUnit\Framework\TestCase;
use Aiwozhe\Rippled\Api\TransactionType\Skeleton;

class SkeletonTest extends TestCase
{
    /**
     * Check for syntax errors
     */
    public function testIsThereAnySyntaxError(): void
    {
        $obj = new Skeleton();
        $this->assertInternalType('object', $obj);
    }
}
