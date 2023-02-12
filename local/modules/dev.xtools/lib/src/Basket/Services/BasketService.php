<?php
namespace Dev\Xtools\Basket\Services;

use Dev\Xtools\Basket\Models\BasketItemPropModel;
use Dev\Xtools\Basket\Models\BasketModel;

interface BasketService {

    /**
     * @param int $id
     * @param float $count;
     * @param BasketItemPropModel[] $props
     */
    public function add(int $id, float $count = 1, array $props = []): int;
    public function update(int $id, int $count);
    public function remove(int $id);
    public function removeAll();
    public function getById();
    public function getItems();
    public function getBasket(): BasketModel;
    public function getSum(): float;
}