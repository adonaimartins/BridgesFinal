<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowBridgeTest extends DuskTestCase
{
    /* Checks the showing function of bridges table */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $string = 'Showing';
            $browser->loginAs(User::find(1))
                    ->visit('/bridges')
                    ->click('@show-button')
                    ->assertSee($string);
        });
    }
}
