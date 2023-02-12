<?php

use Bitrix\Main\Context;
use Bitrix\Sale\Fuser;
use Bitrix\Sale\Basket;
use Bitrix\Main\Engine\AutoWire\ExactParameter;
use Dev\Xtools\Basket\Services\BasketService;
use Dev\Xtools\Basket\Services\BasketServiceBx;

return [
    new ExactParameter(
        BasketService::class, // Тип данных который я хочу в аргуемнте экшена
        'basketService', // Название аргумента который я хочу в экшене
        function($className, $param = null){
            $basket = Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());
            return new BasketServiceBx($basket);
        } //Выполнится это замыкание, и результат его пробросится в этот аргумент
    ),
];