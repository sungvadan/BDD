<?php


class Product
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }



}