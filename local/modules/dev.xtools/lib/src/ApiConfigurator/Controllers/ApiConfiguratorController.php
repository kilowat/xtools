<?php
namespace Dev\Xtools\ApiConfigurator\Controllers;

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Loader;
use Bitrix\Main\Request;
use Dev\Xtools\ApiConfigurator\Models\ApiSettings;
use Dev\Xtools\Core\BaseController;
use Dev\Xtools\Core\Routable;


class ApiConfiguratorController
{
    private array  $request;
    private ApiSettings $settings;

    public function __construct($request, $settings)
    {
        $this->request = $request;
        $this->settings = $settings;
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

        return ['data' => $res];
    }
}