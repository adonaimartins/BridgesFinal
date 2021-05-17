<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateBridgeTest extends DuskTestCase
{
    /* Integration testing for creating a Bridge */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/bridges')
                    ->pause(3000)
                    ->click('@create-button')
                    ->typeSlowly('surveyor_name','surveyor_name',10)
                    ->typeSlowly('surveyor_lastName','surveyor_name',10)
                    ->typeSlowly('structure_name','surveyor_name',10)
                    ->typeSlowly('structure_location','surveyor_name',10)
                    ->typeSlowly('structure_number',144,10)
                    ->select('mileage_type',2)
                    ->typeSlowly('mileage',22,10)
                    ->click('@create-submit')
                    ->assertPathIs('/bridges');
        });
    }
}
