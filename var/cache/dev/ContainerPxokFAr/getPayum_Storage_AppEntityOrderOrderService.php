<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Storage_AppEntityOrderOrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.storage.app_entity_order_order' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Storage\DoctrineStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Storage/AbstractStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Storage/DoctrineStorage.php';

        return $container->services['payum.storage.app_entity_order_order'] = new \Sylius\Bundle\PayumBundle\Storage\DoctrineStorage(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), 'App\\Entity\\Order\\Order');
    }
}
