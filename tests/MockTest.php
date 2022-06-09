<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);
        $mock->expects($this->any())
        ->method('sendMessage')
        ->willReturn(true);
        $this->assertTrue($mock->sendMessage('toos@hotmail.fr','Hello tout le monde'));

        //Créer un mock de la fonction mailer
        //Implémenter dans ce mock la methode sendMessage et la faire retourner true
        //Tester naivement que la méthode du mock retourne true
    }
}