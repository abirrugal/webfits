<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Weight extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function weights(){

        return $this->hasMany(Weight::class);
    }
}
