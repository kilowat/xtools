<?php
namespace Dev\Xtools\ApiConfigurator\Models;

final class ApiSettings {

}

$array = [
    "items" => [
        0 => [
            "route" => [
                'url' => '/api/news/{$id}',
                'where' => [
                    'id' => '[a-z0-9]+',
                ],
            ],
            "iblock" => "1",
            "query" => [
                "select" => [
                    "ID" => "id",

                ],
                "filter" => [],
                "sort" => [],
                "limit" => false,
                "offset" => false,
                "showPagen" => false,
                "showSort" => false,
            ],
        ]

    ],
];