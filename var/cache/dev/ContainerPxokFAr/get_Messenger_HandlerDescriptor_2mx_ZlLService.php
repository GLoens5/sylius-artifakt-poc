<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_2mx_ZlLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.2mx.ZlL' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.2mx.ZlL'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['Sylius\\Bundle\\ApiBundle\\CommandHandler\\ResetPasswordHandler'] ?? $container->load('getResetPasswordHandlerService')), []);
    }
}
