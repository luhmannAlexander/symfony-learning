<?php

namespace App\Service;

class PriceCalculator
{
    public function sumAll(array $products)
    {
        $sum = 0;
        foreach ($products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }
}
