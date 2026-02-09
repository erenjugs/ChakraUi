<?php
/**
 * Tests for ChakraUi
 */

use PHPUnit\Framework\TestCase;
use Chakraui\Chakraui;

class ChakrauiTest extends TestCase {
    private Chakraui $instance;

    protected function setUp(): void {
        $this->instance = new Chakraui(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chakraui::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
