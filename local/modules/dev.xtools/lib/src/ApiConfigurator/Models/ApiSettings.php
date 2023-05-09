<?php
namespace Dev\Xtools\ApiConfigurator\Models;

final class ApiSettings {
    public String $prefix = "api";
    public String $name = "mobile_app";
    public array $settings = [
        0 => [
            "route" => [
                "method" => "get",
                "url" => "catalog/{section}",
                "where" => [
                    "section" => "[a-zA-Z]+",
                ],
            ],
            "data" => [
                "items" => [
                    "source" => "iblock", // file
                    "type" => "list",
                    "iblock" => "26",
                    "select" => [
                        "ID" => [
                            "key" => "id",
                            "type" => "string",
                        ],
                        "PREVIEW_PICTURE" => [
                            "key" => "preview_pic",
                            "type" => "b_file",
                            "select" => [
                                "SRC" => [
                                    "key" => "src",
                                    "type" => "string",
                                ]
                            ],
                        ],
                    ],
                    "filter" => [],
                    "sort" => [],
                    "limit" => null,
                    "offset" => null,
                    "showPagen" => "n",
                    "showSort" => [
                        [
                            "field" => "ID",
                            "name" => "По id"
                        ]
                    ],
                ]
            ]
        ]

    ];
}


