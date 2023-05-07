<?php
namespace Dev\Xtools\ApiConfigurator\Controllers;

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Loader;
use Bitrix\Main\Request;
use Dev\Xtools\Core\BaseController;



class ApiConfiguratorController extends BaseController
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    protected function processBeforeAction(Action $action)
    {
        return parent::processBeforeAction($action);
    }

    public function parseAction()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        /**@var \Bitrix\Iblock\ElementTable $iblock */
        $iblock = \Bitrix\Iblock\Iblock::wakeUp(26)->getEntityDataClass();

        $result = $iblock::getList([
            'select' => [ 'ID', 'KOLLEKTSIYA_KERAMIKI'],
            'limit' => 1,
            'filter' => ['ID' => 3098],
        ])->fetchObject();
        $res = [];
        foreach ($result->getKollektsiyaKeramiki() as $item){
            $res[] = $item->getId();
        }

        return $res;
    }
}