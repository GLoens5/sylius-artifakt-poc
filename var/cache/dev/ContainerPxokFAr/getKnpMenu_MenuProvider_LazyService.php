<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php';

        return $container->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sylius.admin.customer.show' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.customer.show'] ?? $container->load('getSylius_Admin_MenuBuilder_Customer_ShowService'));
        }, 1 => 'createMenu'], 'sylius.admin.main' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.main'] ?? $container->load('getSylius_Admin_MenuBuilder_MainService'));
        }, 1 => 'createMenu'], 'sylius.admin.promotion.update' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.promotion.update'] ?? $container->load('getSylius_Admin_MenuBuilder_Promotion_UpdateService'));
        }, 1 => 'createMenu'], 'sylius.admin.order.show' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.order.show'] ?? $container->load('getSylius_Admin_MenuBuilder_Order_ShowService'));
        }, 1 => 'createMenu'], 'sylius.admin.product_form' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.product_form'] ?? $container->load('getSylius_Admin_MenuBuilder_ProductFormService'));
        }, 1 => 'createMenu'], 'sylius.admin.product.update' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.product.update'] ?? $container->load('getSylius_Admin_MenuBuilder_Product_UpdateService'));
        }, 1 => 'createMenu'], 'sylius.admin.product_variant_form' => [0 => function () use ($container) {
            return ($container->services['sylius.admin.menu_builder.product_variant_form'] ?? $container->load('getSylius_Admin_MenuBuilder_ProductVariantFormService'));
        }, 1 => 'createMenu'], 'sylius.shop.account' => [0 => function () use ($container) {
            return ($container->services['sylius.shop.menu_builder.account'] ?? $container->load('getSylius_Shop_MenuBuilder_AccountService'));
        }, 1 => 'createMenu']]);
    }
}
