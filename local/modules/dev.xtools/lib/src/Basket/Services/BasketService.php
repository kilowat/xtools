<?php
namespace Xtools\Basket\Services;

use Xtools\Basket\Models\BasketItemPropModel;
use Xtools\Basket\Models\BasketModel;

interface BasketService {

    /**
     * @param BasketItemPropModel[] $props
     */
    public function add(int $id, int $count = 1, array $props = []): int;
    public function update(int $id, int $count);
    public function remove(int $id);
    public function removeAll();
    public function getById();
    public function getItems();
    public function getBasket();
}