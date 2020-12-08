<?php declare(strict_types=1);

namespace Aiwozhe\Rippled\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Aiwozhe\Rippled\Exception\RippledException;

class RippledExceptionTest extends TestCase
{
    public function testToString(): void
    {
        $obj = new RippledException('Foo', 1);
        $this->assertEquals('Aiwozhe\Rippled\Exception\RippledException: [1]: Foo'."\n", $obj->__toString());
    }
}
