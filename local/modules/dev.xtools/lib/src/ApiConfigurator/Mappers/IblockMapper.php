<?php
namespace Dev\Xtools\ApiConfigurator\Mappers;

use Bitrix\Iblock\Iblock;

class IblockMapper
{
    protected $iblock;
    protected $select;
    protected $filter;
    protected $sort;
    protected $limit;
    protected $offset;
    protected $showPagen;
    protected $showSort;

    public function __construct($param)
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $this->iblock = Iblock::wakeUp($param['iblock'])->getEntityDataClass();
        $this->select = $param['select'];
        $this->filter = $param['filter'];
        $this->sort = $param['sort'];
        $this->limit = $param['limit'];
        $this->offset = $param['offset'];
        $this->showPagen = $param['showPagen'];
        $this->showSort = $param['showSort'];
    }

    public function getResult(): array
    {
        $result = [];
        $queryResult = $this->iblock::getList([
            'select' => $this->obtainSelect(),
            'limit' => $this->limit,
            'filter' => $this->filter,
        ])->fetchCollection();


        foreach ($queryResult as $item) {
            $currentItem = null;
            foreach ($this->select as $selectKey => $selectItem) {
                $currentItem[ $selectItem['key']] = $item->getId();
            }
            if($currentItem !== null) $result[] = $currentItem;
        }

        return $result;
    }

    private function obtainSelect()
    {
        $select = [];
        foreach ($this->select as $key => $item) {
            if($item['type'] == "string"){
                $select[] = $key;
            }
        }
        return $select;
    }
}