<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        "offer",
        "workstation",
        "state",
    ];
    public function updates(){
        return $this->hasMany(Offer::class);
    }
}
