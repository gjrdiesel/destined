<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->make();

        $this->visit('/register')
            ->type($user->name, 'name')
            ->type('testpassword', 'password')
            ->type('testpassword', 'password_confirmation')
            ->type($user->email, 'email')
            ->press('Register')
            ->assertResponseOk();
    }
}
