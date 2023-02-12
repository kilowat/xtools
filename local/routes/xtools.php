<?php

Bitrix\Main\Loader::includeModule('dev.xtools');

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\Basket\BasketRoutes;

return function (RoutingConfigurator $routes) {
    BasketRoutes::registerRoutes($routes);
};