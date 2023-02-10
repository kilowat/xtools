<?php

namespace Xtools\Basket;

use Bitrix\Main\Routing\RoutingConfigurator;
use Xtools\Core\Routable;
use Xtools\Basket\Controllers\BasketController;

class BasketRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->prefix('api')->group(function (RoutingConfigurator $routes) {
            $routes->get('basket/add', [BasketController::class, 'add']);
            $routes->get('basket/get', [BasketController::class, 'get']);
        });
    }
}