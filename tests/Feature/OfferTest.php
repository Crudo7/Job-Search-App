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

        Offer::all();

        $response = $this->get('/');

        $response -> assertStatus(200)
                  ->assertViewIs('home');
    }
}
