<?php

use PHPUnit\Framework\TestCase;
use Named\NamedSample1;

class NamedSample1Test extends TestCase {
    public function testSample() {
        $Sample = new NamedSample1();
        $Sample->add();
        $Sample->add();
        $this->assertCount(2, $Sample->get());
    }
}
