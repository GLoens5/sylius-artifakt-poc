<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_CollectionDataProvider_AdjustmentsForOrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.collection_data_provider.adjustments_for_order' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\OrderAdjustmentsSubresourceDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/OrderAdjustmentsSubresourceDataProvider.php';

        return $container->privates['sylius.api.collection_data_provider.adjustments_for_order'] = new \Sylius\Bundle\ApiBundle\DataProvider\OrderAdjustmentsSubresourceDataProvider(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
    }
}
