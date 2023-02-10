<?php
namespace Xtools\Basket\Models;


use Xtools\Basket\Services\BasketItemModel;

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