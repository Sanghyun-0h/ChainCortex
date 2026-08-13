<?php
/**
 * Tests for ChainCortex
 */

use PHPUnit\Framework\TestCase;
use Chaincortex\Chaincortex;

class ChaincortexTest extends TestCase {
    private Chaincortex $instance;

    protected function setUp(): void {
        $this->instance = new Chaincortex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincortex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
