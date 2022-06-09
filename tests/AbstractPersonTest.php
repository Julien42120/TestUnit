<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned()
    {
        $mock = $this->getMockForAbstractClass(AbstractPerson::class, ['Jean']);
        $mock   ->expects($this->any())
                ->method('getTitle')
                ->willReturn('dr');

        $this->assertNotEmpty($mock->getNameAndTitle());

    }


    public function testNameAndTitleIncludesValueFromGetTitle()
    {
        

    }    
}