<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Channel\Factory\ChannelFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Core\Factory\ChannelFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Factory/ChannelFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/ChannelFactory.php';

        return $container->services['Sylius\\Component\\Channel\\Factory\\ChannelFactoryInterface'] = new \Sylius\Component\Core\Factory\ChannelFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Channel\\Channel'), 'order_items_based');
    }
}
