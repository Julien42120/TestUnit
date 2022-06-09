<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testIDIsAnInteger()
    {
        $reflectionProperty = new ReflectionProperty('Product', 'product_id');
        $reflectionProperty->setAccessible(true);
        $this->assertSame(gettype($reflectionProperty->getValue(new Product())), 'integer');
    }
}
