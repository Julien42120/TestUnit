<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue() {
        $mailer = new Mailer;
        $result = $mailer->sendMessage('juju@hotmail.fr', 'hello');
        $this->assertTrue($result);
    }
}