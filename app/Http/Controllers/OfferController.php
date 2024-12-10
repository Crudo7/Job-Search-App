<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::get();
        return view('home', compact('offers'));
    }
    public function show(string $offerId)
    {
        $offer=Offer::find($offerId);
        return view('show',compact('offer'));
    }

}
