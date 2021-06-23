<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testDummyLoginData()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('#login-email', 'johnrexter.flores@gmail.com')
                    ->assertPathIs('/home');

            $browser->screenshot('login');
        });
    }
}
