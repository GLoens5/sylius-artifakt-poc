<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_CollectionDataProvider_CountryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.collection_data_provider.country' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\CountryCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/CountryCollectionDataProvider.php';

        return $container->privates['sylius.api.collection_data_provider.country'] = new \Sylius\Bundle\ApiBundle\DataProvider\CountryCollectionDataProvider(($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')), ($container->privates['sylius.api.context.user'] ?? $container->getSylius_Api_Context_UserService()));
    }
}
