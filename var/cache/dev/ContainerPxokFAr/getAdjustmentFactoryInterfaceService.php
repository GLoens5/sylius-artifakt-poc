<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdjustmentFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Order\Factory\AdjustmentFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Order\Factory\AdjustmentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactory.php';

        return $container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] = new \Sylius\Component\Order\Factory\AdjustmentFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Order\\Adjustment'));
    }
}
