<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        /*$this->visit('/')
             ->see('Laravel');*/

        // Grand 1: On initialise les données exemple :
        $data = [10, 20, 30];
        // Grand 2: On agit sur ces données exemple :
        $result = array_sum($data);
        // Grand 3: On teste le resultat exemple :
        $this->assertEquals(60, $result);
        // Grand 4: On teste si tous ce passe bien avec la commande php phpunit.phar,
        // bien sur le but est que tous passe vert :-)
    }
}
