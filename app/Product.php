<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'description', 'imgs'
    ];

    public function sum($products)
    {
        $sum = 0;

        foreach ($products as $product)
        {
            $sum += $product->price;
        }

        return $sum;
    }
}
