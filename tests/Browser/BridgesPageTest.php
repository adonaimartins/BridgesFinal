<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BridgesPageTest extends DuskTestCase
{
    /* Checks if the string is present on the blade */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/login')
                    //fills the form and submit
                    ->type('email','andreg325@hotmail.com')
                    ->type('password','123456789')
                    ->clickLink('submit')
                    ->pause('5000')
            		->visit('/bridges')
                    ->pause('1000')
                    ->assertSee($string);
        });
    }
}
	