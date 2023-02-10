<?php
namespace Xtools\Basket\Controllers;


use Bitrix\Main\Engine\Action;
use Bitrix\Main\Loader;
use Xtools\Core\BaseController;
use Xtools\Basket\Services\BasketService;


class BasketController extends BaseController
{

    protected function processBeforeAction(Action $action)
    {
        Loader::includeModule("catalog");
        Loader::includeModule("sale");
        return parent::processBeforeAction($action);
    }


    public function getAction()
    {
        return \Bitrix\Main\Context::getCurrent()->getRequest()->getCookieRawList()->toArray();
    }

    public function addAction(BasketService $basketService)
    {
        return 'test';
    }
}