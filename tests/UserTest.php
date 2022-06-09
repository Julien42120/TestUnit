'<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function tearDown() :void {
        Mockery::close();
    }

    public function testReturnsFullName() {
        $user = new User('juju@hotmail.fr');
        $user->first_name="Julien";
        $user->surname= "Martin";
        $this->assertSame('Julien Martin', $user->getFullName() );
    }

    public function testFullNameIsEmptyByDefault() {
        $user = new User('juju@hotmail.fr');
        $full = $user->getFullName();
        $this->assertEmpty($full);
    }

    /**
     * @test
     **/
    public function user_has_first_name() {
        $user = new User('juju@hotmail.fr');
        $first = $user->first_name;
        $first = "julien";
        $this->assertNotEmpty($first);

    }

    public function testNotificationIsSent() {
        $user = new User('juju@hotmail.fr');
        $notify = $user->notify('hello');
        $this->assertTrue($notify);
    }

    public function testCannotNotifyUserWithNoEmail() {
        try{
            $mailer = new Mailer();
            $user = new User('');
            $user->setMailer($mailer);
            $user->notify('hello');
        } catch(InvalidArgumentException $error) {
            $this->assertInstanceOf('InvalidArgumentException', $error);
        }
      
    }


    // /**
    //  * @runInSeparateProcess
    //  * @preserveGlobalState disabled
    //  */
    public function testNotifyReturnsTrue(){
        $user = new User('juju@hotmail.fr');
        $notify = $user->notify('hello');
        $this->assertTrue($notify);
    }
}