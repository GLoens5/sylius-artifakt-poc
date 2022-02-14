<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_ItemDataProvider_OrderItemUnitService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.item_data_provider.order_item_unit' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\OrderItemUnitItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/OrderItemUnitItemDataProvider.php';

        return $container->privates['sylius.api.item_data_provider.order_item_unit'] = new \Sylius\Bundle\ApiBundle\DataProvider\OrderItemUnitItemDataProvider(($container->services['sylius.repository.order_item_unit'] ?? $container->load('getSylius_Repository_OrderItemUnitService')), ($container->privates['sylius.api.context.user'] ?? $container->getSylius_Api_Context_UserService()));
    }
}
