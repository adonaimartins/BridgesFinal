<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditBridgeTest extends DuskTestCase
{
    /* Integration testing for editing a Bridge */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/bridges')
                    ->pause(3000)
                    ->click('@edit-button')
                    ->typeSlowly('surveyor_name','surveyor_name',10)
                    ->typeSlowly('surveyor_lastName','surveyor_name',10)
                    ->typeSlowly('structure_name','surveyor_name',10)
                    ->typeSlowly('structure_location','surveyor_name',10)
                    ->typeSlowly('structure_number',123,10)
                    ->select('mileage_type',1)
                    ->typeSlowly('mileage',44,10)
                    ->click('@edit-submit')
                    ->assertSee('Successfully updated bridge!');
        });
    }
}
