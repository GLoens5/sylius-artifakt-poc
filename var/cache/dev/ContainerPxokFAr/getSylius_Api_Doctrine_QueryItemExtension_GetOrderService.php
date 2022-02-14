<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_Doctrine_QueryItemExtension_GetOrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.api.doctrine.query_item_extension.get_order' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\OrderGetMethodItemExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Doctrine/QueryItemExtension/OrderGetMethodItemExtension.php';

        return $container->services['sylius.api.doctrine.query_item_extension.get_order'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\OrderGetMethodItemExtension(($container->privates['sylius.api.context.user'] ?? $container->getSylius_Api_Context_UserService()));
    }
}
