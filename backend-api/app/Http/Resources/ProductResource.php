<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ProductResource extends JsonResource
{

    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            "id"=> $this->id,
            "sku"=> $this->sku,
            "name"=> $this->name,
            "price"=> $this->price,
            "weight"=> $this->weight,
            "description"=> $this->description,
            "thumbnail"=>$this->thumbnail,
            "stock"=> $this->stock,
            "slug"=> $this->slug,
            "user_id"=> $this->user_id,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at,
            "user"=> $this->user,
            "image"=> $this->images,

        ];
    }
}
