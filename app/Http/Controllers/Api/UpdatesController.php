<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use App\Models\Updates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Updates::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $updates = Updates::create([
            'offer_id' => (int)$id,
            'news' => $request->news,
        ]);
        return response()->json($updates, 200); 
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
