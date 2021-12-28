<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCreate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function page_contents(){

      return  $this->hasMany(PageContent::class);
    }

}
