<?php

class Product {
    private $price;
    private $weight;

    public function __construct($price, $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    } 
}

class Shipping {
    private $totalShipping;

    public function calculateTotalShipping($weight, $pricePerKilogram)
    {
        return $weight * $pricePerKilogram;
    }
}

$product = new Product(5, 1);
$shipping = new Shipping();

$totalShippingPrice = $shipping->calculateTotalShipping($product->getWeight(), $pricePerKilogram);


echo $product->getWeight();