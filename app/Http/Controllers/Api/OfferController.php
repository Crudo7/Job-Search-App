<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offers = Offer::all();
        return response()->json($offers , 200);
    }

    public function store(Request $request)
    {
        $offer = Offer::create([
            'offer' => $request->offer,
            'workstation' => $request->workstation,
            'state' => $request->state
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $offer = Offer::find($id);
        return response()->json($offer, 200);
    }

    
    public function update(Request $request, string $id)
    {
        $offer = Offer::find($id);

        $offer->update([
            'offer' => $request->offer,
            'workstation' => $request->workstation,
            'state' => $request->state
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $offers = Offer::find($id);
        $offers->delete();
    }
}
