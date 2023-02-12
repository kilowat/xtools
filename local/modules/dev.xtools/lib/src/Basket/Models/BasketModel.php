<?php
namespace Dev\Xtools\Basket\Models;


use Dev\Xtools\Basket\Services\BasketItemModel;

class BasketModel
{
    private $_items;

    /**
     * BasketModel constructor.
     * @param BasketItemModel[] $items
     */
    public function __construct(Array $items)
    {
        $this->_items = $items;
    }
}