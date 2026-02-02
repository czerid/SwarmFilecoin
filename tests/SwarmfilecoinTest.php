<?php
/**
 * Tests for SwarmFilecoin
 */

use PHPUnit\Framework\TestCase;
use Swarmfilecoin\Swarmfilecoin;

class SwarmfilecoinTest extends TestCase {
    private Swarmfilecoin $instance;

    protected function setUp(): void {
        $this->instance = new Swarmfilecoin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Swarmfilecoin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
