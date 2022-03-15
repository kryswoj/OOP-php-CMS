<?php

class Product {
    private $price;
    private $weight;
    private $freeShipping;

    public function __construct($price, $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    } 

    public function setFreeShipping()
    {
        $this->freeShipping = true;
    }

    public function getFreeShipping()
    {
        return $this->freeShipping;
    }
}

class Shipping {
    private $totalShipping;
    private $products;
    private $pricePerKilogram;
    private $shippingProvider;

    public function __construct($pricePerKilogram, $shippingProvider)
    {
        $this->pricePerKilogram = $pricePerKilogram;
        $this->shippingProvider = $shippingProvider;
    }

    public function addProducts(Product $product)
    {
        $this->products[] = $product;
    }

    public function calculateTotalShipping()
    {
        foreach ($this->products as $product) {
            if(!$product->getFreeShipping()) {
                $this->totalShipping += $product->getWeight() * $this->pricePerKilogram;
            }
        }
    }

    public function getTotalShippingPrice()
    {

        return $this->totalShipping;
    }
}

$product = new Product(5, 1);
$product2 = new Product(1, 2);
$product3 = new Product(3, 5);
$product3->setFreeShipping();

$shipping = new Shipping(5, '');
$shipping->addProducts($product3);
$shipping->addProducts($product2);
$shipping->addProducts($product);

$shipping->calculateTotalShipping();




var_dump($shipping->getTotalShippingPrice());