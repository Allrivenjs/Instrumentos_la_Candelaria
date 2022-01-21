<?php

namespace App\Models;



use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model implements Buyable
{
    use HasFactory;
    protected $fillable = ['id','name','user_id', 'description','weight', 'price', 'stock', 'sku', 'thumbnail', 'slug'];


//    public function getRouteKeyName()
//    {
//        return "slug";
//    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a uno polimorfica
    function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    public function getBuyableWeight($options = null) {
        return $this->weight;
    }
}
