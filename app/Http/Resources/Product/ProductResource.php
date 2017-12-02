<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "description" => $this->detail,
            "price" => $this->price < 3 ? "Tento produkt nieje na predaj" : $this->price,
            "stock" => $this->stock == 0 ? "Nieje skladom" : $this->stock,
            "rating" => $this->reviews->count() > 0 ? round($this->reviews->sum("star") / $this->reviews->count(),1) : "N/P",
            "href" => [
                "reviews" => route("reviews.index", $this->id)
            ]
        ];
    }
}
