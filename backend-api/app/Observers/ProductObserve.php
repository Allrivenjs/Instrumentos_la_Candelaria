<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProductObserve
{

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleting(Product $product)
    {
        if ($product->thumbnail){
            Storage::delete(substr($product->thumbnail, 8 , null));
        }
        if ($product->images()){
            foreach ($product->images() as $image){
                Storage::delete(substr($image, 8 , null));
            }
        }
    }


}
