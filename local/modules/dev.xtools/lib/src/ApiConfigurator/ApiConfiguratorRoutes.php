<?php

namespace Dev\Xtools\ApiConfigurator;

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\ApiConfigurator\Controllers\ApiConfiguratorController;
use Dev\Xtools\Basket\Controllers\BasketController;
use Dev\Xtools\Core\Routable;

class ApiConfiguratorRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->prefix('api')->group(function (RoutingConfigurator $routes) {
            $routes->get('test', [ApiConfiguratorController::class, 'parse']);
        });
    }
}