<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateBridgeTest extends DuskTestCase
{
    /* Integration testing for Creating a Bridge */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/bridges')
                    ->click('@create-button')                    
                    //fills the form and submit
                    ->type('surveyor_name','surveyor_name')
                    ->type('surveyor_lastName','surveyor_name')
                    ->type('structure_name','surveyor_name')
                    ->type('structure_location','surveyor_name')
                    ->type('structure_number',144)
                    ->select('mileage_type',2)
                    ->type('mileage',22)
                    ->press('@create-submit')
                    ->assertPathIs('/bridges');
        });
    }
}
