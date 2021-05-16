<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SelectorTest extends DuskTestCase
{
    /* Checks if the selector exists somewhere and if it's with the correct text */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/angles')
                    ->assertSeeIn('.input-links-0','Bridges');
        });
    }
}
