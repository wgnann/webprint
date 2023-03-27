<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LaravelTools extends DuskTestCase
{
    public function testLaravelToolsNotAuth()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visitRoute('laravel-tools.app')
                ->assertTitleContains('Forbidden');
        });
    }

    public function testLaravelToolsUser()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(SELF::getUser())
                ->visitRoute('laravel-tools.app')
                ->assertTitleContains('Forbidden');
        });
    }

    public function testLaravelToolsAdmin()
    {
        $this->browse(function ($browser) {
            $browser
                ->loginAs(SELF::getUser('admin'))
                ->visitRoute('laravel-tools.app')
                ->assertSee('Laravel tools Dashboard');
            $browser->screenshot('laravel-tools');
        });
    }
}
