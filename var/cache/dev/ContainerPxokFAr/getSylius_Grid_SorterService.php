<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_SorterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.sorter' shared service.
     *
     * @return \Sylius\Component\Grid\Sorting\Sorter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Sorting/SorterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Sorting/Sorter.php';

        return $container->services['sylius.grid.sorter'] = new \Sylius\Component\Grid\Sorting\Sorter();
    }
}
