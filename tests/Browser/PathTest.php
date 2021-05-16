<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PathTest extends DuskTestCase
{
    /* Checks if the path is set correctly */
    
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Stiffener')
                    ->assertPathIs('/stiffeners');
        });
    }
}
