<?php
namespace Dev\Xtools\Basket\Controllers;

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Loader;
use Bitrix\Main\Request;
use Dev\Xtools\Core\BaseController;
use Dev\Xtools\Basket\Services\BasketService;


class BasketController extends BaseController
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    protected function processBeforeAction(Action $action)
    {
        Loader::includeModule("catalog");
        Loader::includeModule("sale");
        return parent::processBeforeAction($action);
    }


    public function getAction()
    {
        return $this->getRequest()->getCookieRawList()->toArray();
    }

    public function addAction(BasketService $basketService)
    {
        $basketService->add();
        return $this->getJsonFromRequest();
    }
}