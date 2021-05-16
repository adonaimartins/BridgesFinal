<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditBridgeTest extends DuskTestCase
{
    /* Integration testing for Editing a Bridge */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/bridges')
                    ->click('@edit-button')
                    //fills the form and submit
                    ->type('surveyor_name','surveyor_name')
                    ->type('surveyor_lastName','surveyor_name')
                    ->type('structure_name','surveyor_name')
                    ->type('structure_location','surveyor_name')
                    ->type('structure_number',123)
                    ->select('mileage_type',1)
                    ->type('mileage',44)
                    ->press('@edit-submit')
                    ->assertSee('Successfully updated bridge!');
        });
    }
}
