<?php
namespace Xtools\Core;

use Bitrix\Main\Engine\AutoWire\ExactParameter;
use Bitrix\Main\Engine\Controller;
use Xtools\Basket\Services\BasketService;
use Xtools\Basket\Services\BasketServiceBx;

class BaseController extends Controller
{
    public function getAutoWiredParameters(): array
    {
        return [
            new ExactParameter(
                BasketService::class,
                'basketService',
                function($className, $param = null){
                    $basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), \Bitrix\Main\Context::getCurrent()->getSite());
                    return new BasketServiceBx($basket);
                }
            ),
        ];
    }
    /**
     * Returns default pre-filters for action.
     * @return array
     */
    protected function getDefaultPreFilters(): array
    {
        return array();
    }
}