<?php


namespace Dev\Xtools\Basket\Models;


use Bitrix\Main\Type\Collection;

class BasketItemPropModel
{
    private string $_name;
    private string $_code;
    private string $_value;

    public function __construct(string $name, string $code, string $value)
    {
        $this->_name = $name;
        $this->_code = $code;
        $this->_value = $value;
    }

    public function toArray()
    {
        return [
            'name' => $this->_name,
            'code' => $this->_code,
            'value' => $this->_value,
        ];
    }
}
