<?php
/**
 * Tests for ChainAbyss
 */

use PHPUnit\Framework\TestCase;
use Chainabyss\Chainabyss;

class ChainabyssTest extends TestCase {
    private Chainabyss $instance;

    protected function setUp(): void {
        $this->instance = new Chainabyss(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainabyss::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
