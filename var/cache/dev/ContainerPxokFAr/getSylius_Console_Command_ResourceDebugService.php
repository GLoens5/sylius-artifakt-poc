<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Console_Command_ResourceDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.console.command.resource_debug' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Command\DebugResourceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Command/DebugResourceCommand.php';

        return $container->services['sylius.console.command.resource_debug'] = new \Sylius\Bundle\ResourceBundle\Command\DebugResourceCommand(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService()));
    }
}
