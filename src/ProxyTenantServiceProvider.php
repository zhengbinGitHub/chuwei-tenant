<?php
namespace ChuWei\Client\Tenant;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: maczheng
 * Date: 2020-11-04
 * Time: 17:34
 */

class ProxyTenantServiceProvider extends ServiceProvider
{
    /**
     * 注册信息
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        if (! $this->app->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/cwapp_tenant.php', 'cwapp_tenant');
        }

        //注册服务
        $this->app->singleton('proxytenant',function (){
            return new ProxyTenantManage();
        });
    }
}