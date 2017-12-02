<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
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
            "customer" => $this->customer,
            "body" => $this->review,
            "rating" => $this->star,
            "href" => [
                "product" => route("products.show", $this->product_id)
            ]
        ];
    }
}
