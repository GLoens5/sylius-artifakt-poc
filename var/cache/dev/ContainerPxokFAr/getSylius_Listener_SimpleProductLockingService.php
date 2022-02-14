<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_SimpleProductLockingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.simple_product_locking' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\SimpleProductLockingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/SimpleProductLockingListener.php';

        return $container->services['sylius.listener.simple_product_locking'] = new \Sylius\Bundle\CoreBundle\EventListener\SimpleProductLockingListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
