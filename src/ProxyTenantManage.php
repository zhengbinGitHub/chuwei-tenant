<?php
namespace ChuWei\Client\Tenant;

use ChuWei\Client\Tenant\Models\ApiApp;

/**
 * Created by PhpStorm.
 * User: maczheng
 * Date: 2020-12-17
 * Time: 18:11
 */

class ProxyTenantManage
{
    /**
     * 获取商户APPID
     * @param $merchantId
     * @param $platform
     * @return int
     */
    public function getApiAppid($merchantId, $platform)
    {
        $appId = ApiApp::query()->where(['tenant_id' => $merchantId, 'platform' => $platform])->value('app_id');
        return $appId?:'';
    }

    /**
     * 获取商户ID
     * @param $appid
     * @return int
     */
    public function getTenantId($appid)
    {
        $tenantId = ApiApp::query()->where('app_id', $appid)->value('tenant_id');
        return $tenantId?:0;
    }
}