<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SeeLinkTest extends DuskTestCase
{
    /* Checks if the link is visible in the blade */
    
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/cps')
                    ->assertSeeLink('View All cps');
        });
    }
}
