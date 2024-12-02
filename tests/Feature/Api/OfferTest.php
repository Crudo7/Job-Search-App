<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_CheckIfReceiveAllEntryOfOfferInJsonFile(){
        $offers = Offer::factory(2)->create([
            'offer'=>'prueba test offer',
            'workstation'=>'prueba test workstation',
            'state'=>'prueba test state'
        ]);

        $response = $this->get(route('apihome'));
       
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfFunctionShowWorks(){
        $response = $this->post(route('apistore'), [
            'offer' => 'Empresa',
            'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa',
            'state' => 'abierto'
        ]);
        $data = ['offer' => 'Empresa', 'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa', 'state' => 'abierto'];
        $response = $this->get(route('apishow', 1));
        $response->assertStatus(200)
                ->assertJsonCount(6)
                ->assertJsonFragment($data);
    }

    public function test_CheckIfCanUpdateEntryInJournalWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'offer' => 'Empresa',
            'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa',
            'state' => 'abierto'
        ]);

        $data = ['offer' => 'Empresa'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/offer/1', [
            'offer' => 'Empresa',
            'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa',
            'state' => 'abierto'
        ]);

        $data = ['offer' => 'Empresa'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }

    public function test_CheckIfCanCreateNewEntryInOfferWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'offer' => 'Empresa',
            'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa',
            'state' => 'abierto'
        ]);
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }

    public function test_CheckIfCanDeleteEntryInOfferWithApi(){
       
        $offer = Offer::factory(2)->create([
            'offer' => 'Empresa',
            'workstation' => 'Puesto de trabajodfsdfsdfsdfsdfsdfsdfsfsdfa',
            'state' => 'abierto'
        ]);

        $response = $this->delete(route('apidestroy', 1));

        $this->assertDatabaseCount('offers', 1);

        $response = $this->get(route('apihome'));
        $response->assertJsonCount(1);

    }
}
