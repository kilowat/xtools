<?php

use Bitrix\Main\Context;
use Bitrix\Sale\Fuser;
use Bitrix\Sale\Basket;
use Bitrix\Main\Engine\AutoWire\ExactParameter;
use Dev\Xtools\Features\Auth\Repositories\AuthRepository;


return [
    new ExactParameter(
        AuthRepository::class, // Тип данных который я хочу в аргуемнте экшена
        'authRepository', // Название аргумента который я хочу в экшене
        function($className, $param = null){
            return new AuthRepository();
        } //Выполнится это замыкание, и результат его пробросится в этот аргумент
    ),
];