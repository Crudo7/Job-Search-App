<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use App\Models\Updates;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdatesTest extends TestCase
{
    use RefreshDatabase;    
    /**
     * A basic feature test example.
     */

    public function test_createText()
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

        public function test_getAllText()
    {   
        Offer::factory(10)->create([
            'offer'=> 'prueba',
            'workstation'=> 'trabajo',
            'state'=> 'abierto'
        ]);
        Updates::factory(1)->create([
            'news' => 'Prueba get all',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offer/1/updates');

        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_getTextById()
    {   
        Offer::factory(10)->create([
            'offer'=> 'prueba',
            'workstation'=> 'trabajo',
            'state'=> 'abierto'
        ]);
        Updates::factory(1)->create([
            'news' => 'prueba get element by id',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offer/1/updates/1');

        $response->assertStatus(200)->assertJsonFragment(['offer_id' => 1]);
    }

    public function store(Request $request, string $id)
    {
        $updates = Updates::create([
            'offer_id' => (int)$id,
            'news' => $request->news,
        ]);
        return response()->json($updates, 200); 
    }

    public function test_deleteText()
    {   
        Offer::factory(10)->create([
            'offer'=> 'prueba',
            'workstation'=> 'trabajo',
            'state'=> 'abierto'
        ]);
        Updates::factory(1)->create([
            'news' => 'Prueba de delete',
            'offer_id' => 1,
        ]);
        
        $response = $this->delete('/api/offer/1/updates/1');
        $this->assertDatabaseCount('updates', 0);
    }

    public function test_updateText()
    {   
        Offer::factory(10)->create([
            'offer'=> 'prueba',
            'workstation'=> 'trabajo',
            'state'=> 'abierto'
        ]);
        Updates::factory(1)->create([
            'news' => 'Prueba de update',
            'offer_id' => 1,
        ]);
        
        $response = $this->put('/api/offer/1/updates/1', 
        [
            'news' => 'Prueba de update',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offer/1/updates/1');

        $response->assertStatus(200)->assertJsonFragment([

            'news' => 'Prueba de update',
            'offer_id' => 1,
        ]);
    }
}
