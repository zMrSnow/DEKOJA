<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $hidden = ["created_at", "updated_at"];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
