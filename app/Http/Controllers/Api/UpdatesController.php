<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use App\Models\Updates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdatesController extends Controller
{

    public function index()
    {
        return response()->json(Updates::all(), 200);
    }

    public function store(Request $request, string $id)
    {
        $updates = Updates::create([
            'offer_id' => (int)$id,
            'news' => $request->news,
        ]);
        return response()->json($updates, 200); 
    }

    public function show(string $offerId, string $newsId)
    {
        return response()->json(Offer::find($offerId)->updates[(int)$newsId - 1],200);
    }
 
    public function update(Request $request, string $offerId, string $newsId)
    {
        $updates = Offer::find($offerId)->updates[(int)$newsId - 1];

        $updates->update([
            'offers_id' => $request-> offers_id,
            'news' => $request->news,
        ]);
        return response()->json($updates, 200); 
    }
    
    public function destroy(string $offerId, string $newsId)
    {
        Offer::find($offerId)->updates[(int)$newsId - 1]->delete();
    }
}
    

