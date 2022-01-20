<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
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
        return $this->belongsToMany(Category::class);
    }

}
