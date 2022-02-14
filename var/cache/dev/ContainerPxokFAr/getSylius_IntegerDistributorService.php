<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_IntegerDistributorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.integer_distributor' shared service.
     *
     * @return \Sylius\Component\Core\Distributor\IntegerDistributor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributor.php';

        return $container->services['sylius.integer_distributor'] = new \Sylius\Component\Core\Distributor\IntegerDistributor();
    }
}
