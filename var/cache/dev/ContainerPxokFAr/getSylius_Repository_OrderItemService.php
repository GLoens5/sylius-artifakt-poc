<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_OrderItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.order_item' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderItemRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Repository/OrderItemRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Doctrine/ORM/OrderItemRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Repository/OrderItemRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/OrderItemRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['sylius.repository.order_item'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderItemRepository($a, $a->getClassMetadata('App\\Entity\\Order\\OrderItem'));
    }
}
