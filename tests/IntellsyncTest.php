<?php
/**
 * Tests for IntellSync
 */

use PHPUnit\Framework\TestCase;
use Intellsync\Intellsync;

class IntellsyncTest extends TestCase {
    private Intellsync $instance;

    protected function setUp(): void {
        $this->instance = new Intellsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Intellsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
