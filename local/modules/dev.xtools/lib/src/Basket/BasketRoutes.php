<?php

namespace Dev\Xtools\Basket;

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\Core\Routable;
use Dev\Xtools\Basket\Controllers\BasketController;

class BasketRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->prefix('api')->group(function (RoutingConfigurator $routes) {
            $routes->post('basket/add', [BasketController::class, 'add']);
            $routes->get('basket/get', [BasketController::class, 'get']);
        });
    }
}