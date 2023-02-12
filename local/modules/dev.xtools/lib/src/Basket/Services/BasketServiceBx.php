<?php
namespace Dev\Xtools\Basket\Services;

use Bitrix\Main\LoaderException;
use Bitrix\Main\ObjectNotFoundException;
use Bitrix\Sale\Basket;
use Bitrix\Sale\BasketBase;
use Dev\Xtools\Basket\Models\BasketItemPropModel;
use Dev\Xtools\Basket\Models\BasketModel;

class BasketServiceBx implements BasketService
{
    private BasketBase $_basket;

    public function __construct(BasketBase $basket)
    {

        $this->_basket = $basket;
    }

    public function add(int $id, float $count = 1.0, array $props = []): int
    {
        $arrProps = array_map(function ($item) {
            /** @var BasketItemPropModel $item */
           return $item->toArray();
        }, $props);

        $fields = [
            'PRODUCT_ID' => $id, // ID товара, обязательно
            'QUANTITY' => $count, // количество, обязательно
            'PROPS' => $arrProps,
        ];

        $r = \Bitrix\Catalog\Product\Basket::addProduct($fields);


        if (!$r->isSuccess()) {
            var_dump($r->getErrorMessages());die();
        }

        return 1;
    }

    public function update(int $id, int $count)
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id)
    {
        // TODO: Implement remove() method.
    }

    public function removeAll()
    {
        // TODO: Implement removeAll() method.
    }

    public function getById()
    {
        // TODO: Implement getById() method.
    }

    public function getItems()
    {
        // TODO: Implement getItems() method.
    }

    public function getBasket(): BasketModel
    {
        $res = $this->_basket;
        return new BasketModel([]);
    }

    public function getSum(): float
    {
        return $this->_basket->getPrice();
    }
}