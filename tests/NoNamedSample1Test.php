<?php

use PHPUnit\Framework\TestCase;

class NoNamedSample1Test extends TestCase {
    public function testSample() {
        $Sample = new \NoNamedSample1();
        $Sample->add();
        $Sample->add();
        $this->assertCount(2, $Sample->get());
    }
}
