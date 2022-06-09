<?php

use PHPUnit\Framework\Constraint\StringStartsWith;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertStringStartsWith;
use function PHPUnit\Framework\stringStartsWith;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty() {
        $item = new Item;
        $item->getDescription();
        $this->assertNotEmpty($item);
    }
    
    public function testIDisAnInteger() {
        $item = new ItemChild;
        $this->assertSame(gettype($item->getID()), 'integer');
    }    

    public function testTokenIsAString() {
        $reflectionMethod = new ReflectionMethod('Item', 'getToken');
        $reflectionMethod->setAccessible(true);
        $this->assertSame(gettype($reflectionMethod->invoke(new Item())), 'string');
    }    

    public function testPrefixedTokenStartsWithPrefix() {
        $reflectionMethod = new ReflectionMethod('Item', 'getPrefixedToken');
        $reflectionMethod->setAccessible(true);
        $return = str_starts_with($reflectionMethod->invoke(new Item(),'toto'),'toto');
        $this->assertTrue($return);
    }
}
