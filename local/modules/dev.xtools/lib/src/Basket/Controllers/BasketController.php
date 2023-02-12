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

    /**
     * @OA\Get(
     *     path="/api/basket/get",
     *     @OA\Response(response="200", description="Объект корзины",
     *     @OA\JsonContent(ref="#/components/schemas/BasketModel"),
     *  )
     * )
     */
    public function getAction(BasketService $basketService)
    {
        return $basketService->getBasket()->toArray();
    }

    public function sumAction(BasketService $basketService)
    {
        return $basketService->getSum();
    }

    public function addAction(BasketService $basketService)
    {
       return $basketService->add(3423);
    }
}