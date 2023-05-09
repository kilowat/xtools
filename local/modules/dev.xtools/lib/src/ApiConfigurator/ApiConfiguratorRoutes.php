<?php

namespace Dev\Xtools\ApiConfigurator;

use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\ApiConfigurator\Controllers\ApiConfiguratorController;
use Dev\Xtools\ApiConfigurator\Models\ApiSettings;
use Dev\Xtools\Basket\Controllers\BasketController;
use Dev\Xtools\Core\Routable;

class ApiConfiguratorRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routeSettings = new ApiSettings();

        $routes->prefix($routeSettings->prefix)->group(function (RoutingConfigurator $routes) use ($routeSettings) {
            foreach ($routeSettings->settings as $item) {
                $routeData = $item['route'];
                $route = $routes->{$routeData['method']}($routeData['url'], function() use($item) {
                    $controller = new ApiConfiguratorController($_REQUEST, $item);
                   return $controller->parseAction();
                });
                if($routeData['where']){
                    foreach ($routeData['where'] as $whereKey => $whereValue){
                        $route->where($whereKey, $whereValue);
                    }
                }
            }
        });
    }
}