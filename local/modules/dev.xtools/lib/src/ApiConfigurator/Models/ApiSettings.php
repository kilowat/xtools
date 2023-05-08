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
                "seo" => [
                    "title" => "",
                    "description" => "",
                    "iblock" => "1",
                ],
                "items" => [
                    "type" => "iblock", // file
                    "iblock" => "1",
                    "query" => [
                        "select" => [
                            "ID" => [
                                "key" => "id",
                                "type" => "string",
                            ],
                            "PREVIEW_PICTURE" => [
                                "key" => "preview_pic",
                                "type" => "file",
                                "sub_key" => [
                                    "SRC" => [
                                        "key" => "src",
                                        "type" => "string",
                                    ]
                                ],
                            ],
                            "count(id)" => [
                                "key" => "total",
                                "type" => "expression"
                            ],
                            "KOLLEKTSIYA_KERAMIKI" => [
                                "key" => "keramika",
                                "type" => "link_iblock",
                                "sub_key" => [
                                    "ID" => [
                                        "key" => "id",
                                        "type" => "string",
                                    ],
                                    "NAME" => [
                                        "key" => "name",
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
                    ],
                ]
            ]
        ]

    ];
}


