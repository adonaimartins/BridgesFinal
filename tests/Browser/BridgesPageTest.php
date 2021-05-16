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
            $string = 'Show this bridge';
            $browser->visit('/bridges')
                    ->assertSee($string);
        });
    }
}
