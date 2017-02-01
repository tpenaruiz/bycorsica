<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $role = 1;
        switch($role){
            case 1:
                $this->visit('/')
                    ->click('Login')
                    ->type('toto@chez.fr', 'email')
                    ->type('password', 'password')
                    ->press('Login')
                    ->see('Back');
                break;
            case 2:
                $this->visit('/')
                    ->click('Login')
                    ->type('toto@chez.fr', 'email')
                    ->type('password', 'password')
                    ->press('Login')
                    ->see('Front');
                break;
            default:
                $this->visit('/')
                    ->click('Login')
                    ->type('toto@chez.fr', 'email')
                    ->type('password', 'password')
                    ->press('Login')
                    ->see('Front');
                break;
        }
    }
}
