<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase {

    //utiliser la librairie Mockery : https://github.com/mockery/mockery

    public function tearDown() {
        Mockery::close();
    }

    public function testOrderIsProcessedUsingAMock() {
    }
    
    public function testOrderIsProcessedUsingASpy() {
    }
}