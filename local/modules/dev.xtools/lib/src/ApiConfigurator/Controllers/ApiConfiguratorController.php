<?php
namespace Dev\Xtools\ApiConfigurator\Controllers;

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Loader;
use Bitrix\Main\Request;
use Dev\Xtools\ApiConfigurator\Mappers\IblockMapper;
use Dev\Xtools\ApiConfigurator\Models\ApiSettings;
use Dev\Xtools\Core\BaseController;
use Dev\Xtools\Core\Routable;


class ApiConfiguratorController
{
    private array $request;
    private array $settings;

    public function __construct($request, $settings)
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $this->request = $request;
        $this->settings = $settings;
    }

    public function parseAction()
    {
        $result = [];
       // var_dump($this->settings['data']); die();
        foreach ($this->settings['data'] as $key => $dateItem) {
            if($dateItem['source'] == 'iblock') {
                $mapper = new IblockMapper($dateItem);
                $result[$key] = $mapper->getResult();
            }
        }
        /*
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
        */
        return ['data' => $result];
    }
}