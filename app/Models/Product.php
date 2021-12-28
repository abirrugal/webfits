<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;


class Product extends Model implements HasMedia
{
    
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = [];

    protected static function boot(){
        parent::boot();

        static::creating(function($product){

            $product->slug = Str::slug($product->title);
        });
  
    }

    public function category(){
        return $this->belongsTo(Category::class ,'category_id','id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
     }

     public function product_colors(){
        return $this->hasMany(ProductColor::class);
       }

     public function product_sizes(){
        return $this->hasMany(ProductSize::class);
       }
       
        public function product_weights(){
        return $this->hasMany(Order_Weight::class);
       }

       public function product_color_images(){
        return $this->hasMany(ColorAndImages::class);
       }

      

}
