<?php
namespace Xtools\Tests\Features\Basket\Services;

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Sale\Basket;
use Bitrix\Sale\Fuser;
use PHPUnit\Framework\TestCase;
use Xtools\Basket\Services\BasketServiceBx;

class BasketServiceBxTest extends TestCase
{
    private $_service;

    protected function setUp(): void
    {
        if (!Loader::includeModule('sale')) {
            $this->markTestSkipped(
                'Sale module is not available!',
            );
        }

        $siteId = Context::getCurrent()->getSite();
        $fuser = Fuser::getId();
        $basket = Basket::loadItemsForFUser($fuser, $siteId);
        $this->_service = new BasketServiceBx($basket);
    }

    public function testAddShouldReturnId()
    {
        $this->_service->add(1);
        $this->assertEquals(1, 10);
    }
}