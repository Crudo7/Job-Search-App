<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Offer;

class OfferTest extends TestCase
{
    use RefreshDatabase;
    public function test_indexIsWorking(){
        
        $this->withoutExceptionHandling();


        $response = $this->get('/');

        $response -> assertStatus(200)
                  ->assertViewIs('home');
    }

    public function test_showIsWorking(){
        Offer::create([
            'offer'=>'oferta',
            'workstation'=>'trabajo',
            'state'=>'abierto'
        ]);
        $response=$this->get('/offer/1');
        $response->assertStatus(200)->assertViewIs('show');
    }
}