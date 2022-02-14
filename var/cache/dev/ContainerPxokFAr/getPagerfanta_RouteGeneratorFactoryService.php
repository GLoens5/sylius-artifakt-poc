<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagerfanta_RouteGeneratorFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pagerfanta.route_generator_factory' shared service.
     *
     * @return \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/RouteGenerator/RouteGeneratorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/babdev/pagerfanta-bundle/RouteGenerator/RequestAwareRouteGeneratorFactory.php';

        return $container->services['pagerfanta.route_generator_factory'] = new \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory(($container->services['router'] ?? $container->getRouterService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
