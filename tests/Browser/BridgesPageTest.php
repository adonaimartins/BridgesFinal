<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Illuminate\Support\Facades\Hash;
use Tests\DuskTestCase;

class BridgesPageTest extends DuskTestCase
{
    /* Checks if the string is present on the current blade */

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $string = 'View All bridges';
            $browser->loginAs(User::find(1))
            		->visit('/bridges')
                    ->assertSee($string);
        });
    }
}
	