<?php
/**
 * Tests for SolidOrbit
 */

use PHPUnit\Framework\TestCase;
use Solidorbit\Solidorbit;

class SolidorbitTest extends TestCase {
    private Solidorbit $instance;

    protected function setUp(): void {
        $this->instance = new Solidorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
