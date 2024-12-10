<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updates extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'news',
    ];

    public function offers(){
        return $this->belongsTo(Offer::class);
    }
}
