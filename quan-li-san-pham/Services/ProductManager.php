<?php

namespace Services;

class ProductManager
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add($products): void
    {
        $this->products[] = $products;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

}
