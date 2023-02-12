<?php

Bitrix\Main\Loader::includeModule('dev.xtools');

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\Basket\BasketRoutes;
use Dev\Xtools\Swagger\SwaggerRoutes;

return function (RoutingConfigurator $routes) {
    SwaggerRoutes::registerRoutes($routes);
    BasketRoutes::registerRoutes($routes);
};