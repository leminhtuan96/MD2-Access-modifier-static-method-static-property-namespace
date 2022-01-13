<?php

namespace Models;

class Product
{
    private string $name;
    private int $price;

    public function __construct($name , $price  )
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return int|mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
