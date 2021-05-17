<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteBridgeTest extends DuskTestCase
{
    /* Checks functionality of delete button */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/bridges')
                    ->pause(1000)
                    ->click('@delete-button')
                    ->assertSee('Successfully deleted the bridge!');
        });
    }
}
