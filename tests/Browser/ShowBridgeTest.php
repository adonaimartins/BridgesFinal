<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowBridgeTest extends DuskTestCase
{
    /* Checks the showing function of bridges */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/bridges')
                    ->click('@show-button')
                    ->assertSee("Showing");
        });
    }
}
