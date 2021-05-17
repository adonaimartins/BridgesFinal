<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PathTest extends DuskTestCase
{
    /* Checks if the path is set correctly */
    
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/stiffeners')
                    ->click('@create-stiffener')
                    ->assertPathIs('/stiffener/create');
        });
    }
}
