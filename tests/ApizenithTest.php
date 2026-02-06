<?php
/**
 * Tests for apiZenith
 */

use PHPUnit\Framework\TestCase;
use Apizenith\Apizenith;

class ApizenithTest extends TestCase {
    private Apizenith $instance;

    protected function setUp(): void {
        $this->instance = new Apizenith(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apizenith::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
