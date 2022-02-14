<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Messenger_DataTransformerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.messenger.data_transformer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Messenger\DataTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Messenger/DataTransformer.php';

        return $container->privates['api_platform.messenger.data_transformer'] = new \ApiPlatform\Core\Bridge\Symfony\Messenger\DataTransformer(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
