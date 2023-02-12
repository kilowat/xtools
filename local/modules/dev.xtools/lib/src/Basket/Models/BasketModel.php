<?php
namespace Dev\Xtools\Basket\Models;


use Dev\Xtools\Basket\Services\BasketItemModel;

/**
 * @OA\Schema()
 */
class BasketModel
{
    private $_items;

    /**
     * BasketModel constructor.
     * @param BasketItemModel[] $items
     */
    public function __construct(Array $items)
    {
        $this->_items = $items;
    }

    /**
     * Сумма
     * @OA\Property(
     *   property="sum",
     *   type="float",
     *   description="Сумма"
     * )
     * @return float
     */
    public function getSum()
    {
        return 100.0;
    }

    public function toArray()
    {
        return [
            'sum' => $this->getSum(),
        ];
    }
}