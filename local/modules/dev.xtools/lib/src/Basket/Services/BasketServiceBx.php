<?php
namespace Xtools\Basket\Services;

use Bitrix\Main\LoaderException;
use Bitrix\Main\ObjectNotFoundException;
use Bitrix\Sale\Basket;
use Bitrix\Sale\BasketBase;
use Xtools\Basket\Models\BasketItemPropModel;

class BasketServiceBx implements BasketService
{
    private BasketBase $_basket;

    public function __construct(BasketBase $basket)
    {

        $this->_basket = $basket;
    }

    public function add(int $id, int $count = 1, array $props = []): int
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

        try {
            $r = \Bitrix\Catalog\Product\Basket::addProduct($fields);
        } catch (LoaderException | ObjectNotFoundException $e) {

        }

        if (!$r->isSuccess()) {
            var_dump($r->getErrorMessages());
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

    public function getBasket()
    {
        // TODO: Implement getBasket() method.
    }
}