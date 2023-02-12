<?php
namespace Dev\Xtools\Core;
use Bitrix\Main\Engine\Controller;

class BaseController extends Controller
{
    public function getAutoWiredParameters(): array
    {
         return require ('di.php');
    }
    /**
     * Returns default pre-filters for action.
     * @return array
     */
    protected function getDefaultPreFilters(): array
    {
        return array();
    }

    public function getJsonFromRequest()
    {
        return  json_decode( file_get_contents('php://input') );
    }
}