'<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testReturnsFullName() {
    }

    public function testFullNameIsEmptyByDefault() {
    }

    /**
     * @test
     **/
    public function user_has_first_name() {
    }

    public function testNotificationIsSent() {
    }

    public function testCannotNotifyUserWithNoEmail() {
    }


    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testNotifyReturnsTrue(){
    }
}