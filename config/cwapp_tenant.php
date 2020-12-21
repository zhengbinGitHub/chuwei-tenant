<?php
/**
 * Created by PhpStorm.
 * User: maczheng
 * Date: 2020-12-20
 * Time: 17:11
 */
return [
    'app_check_urls' => [
        'mall' => ['url' => env('MALL_CHECK_URL',''), 'name' => '智慧门店系统'],
        'fuwu' => ['url' => env('FUWU_CHECK_URL',''), 'name' => '服务系统'],
        'erp' => ['url' => env('ERP_CHECK_URL',''), 'name' => '进销存系统']
    ],
];