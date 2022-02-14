<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_DebugGatewayService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'payum.command.debug_gateway' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\DebugGatewayCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/DebugGatewayCommand.php';

        $container->privates['payum.command.debug_gateway'] = $instance = new \Payum\Bundle\PayumBundle\Command\DebugGatewayCommand();

        $instance->setContainer($container);
        $instance->setName('debug:payum:gateway');

        return $instance;
    }
}
