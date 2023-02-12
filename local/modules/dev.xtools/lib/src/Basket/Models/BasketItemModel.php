<?php

namespace Dev\Xtools\Basket\Services;

class BasketItemModel
{
    private $id;
    private $price;
    public function __construct($id, $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'price' => $this->price,
        ];
    }
}