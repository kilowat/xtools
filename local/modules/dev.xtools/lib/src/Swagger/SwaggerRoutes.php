<?php

namespace Dev\Xtools\Swagger;

use Bitrix\Main\Routing\Controllers\PublicPageController;
use Bitrix\Main\Routing\RoutingConfigurator;
use Dev\Xtools\Core\Routable;

class SwaggerRoutes implements Routable
{
    public static function registerRoutes(RoutingConfigurator $routes)
    {
        $routes->prefix('api')->group(function (RoutingConfigurator $routes) {
            $routes->get('yaml', function(){
                $openapi = \OpenApi\Generator::scan([__DIR__.'/../']);
                header('Content-Type: application/x-yaml');
                return $openapi->toYaml();
            });
        });
    }
}