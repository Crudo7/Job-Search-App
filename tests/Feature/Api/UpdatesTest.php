<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdatesTest extends TestCase
{
    use RefreshDatabase;    
    /**
     * A basic feature test example.
     */

    public function test_CreateElement()
    { 
        Offer::factory(1)->create([
            'offer'=> 'hola prueba',
            'workstation'=> '1',
            'state'=> 'abierto'
        ]);
            
        $response = $this->post('/api/offer/1/updates', [

            'offer_id' => 1,
            'news' => 'Nueva entrada',
        ]);

        $response = $this->get('/api/offer/1/updates/1');

        $response->assertStatus(200)->assertJsonFragment([

            'offer_id' => 1,
            'news' => 'Nueva entrada',
        ]);
    }
}