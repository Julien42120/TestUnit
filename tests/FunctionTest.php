<?php
	
require 'functions.php';
use PHPUnit\Framework\TestCase; 

class FunctionTest extends \PHPUnit\Framework\TestCase {

	public function testAddReturnsTheCorrectSum() {
        $result = add(2, 5);
        $expected = 7;
        // assert Equals pareil
        $this->assertSame($expected , $result);
    }

    public function testAddDoesNotReturnTheIncorrectSum() {
        // assert Equals pareil
        $this->assertFalse(false);
	}
}
	
?>