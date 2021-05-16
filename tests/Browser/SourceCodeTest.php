<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SourceCodeTest extends DuskTestCase
{
    /* Checks if the source code exists in the page */
    
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $code ='<table class="table table-striped table-bordered">';
            $browser->visit('/bays')
                    ->assertSourceHas($code);
        });
    }
}
