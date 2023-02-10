<?php

Bitrix\Main\Loader::includeModule('dev.xtools');

use Bitrix\Main\Routing\RoutingConfigurator;
use Xtools\Basket\BasketRoutes;


return function (RoutingConfigurator $routes) {
    BasketRoutes::registerRoutes($routes);
};