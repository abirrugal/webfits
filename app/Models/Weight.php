<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function product_weight(){

        return $this->belongsTo(Weight::class);
    }
}
