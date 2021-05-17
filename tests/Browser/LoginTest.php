<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /* Login Test */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    //fills the form and submit
                    ->typeSlowly('email','asndreg325@hotmail.com',10)
                    ->typeSlowly('password','password',10)
                    ->press('submit')
                    ->assertPathIs('/bridges');
        });
    }
}
