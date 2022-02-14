<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Security_UserLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.security.user_login' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Security\UserLogin
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Security/UserLoginInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Security/UserLogin.php';

        return $container->services['sylius.security.user_login'] = new \Sylius\Bundle\UserBundle\Security\UserLogin(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['SyliusLabs\\Polyfill\\Symfony\\Security\\Core\\User\\UserChecker'] ?? $container->load('getUserCheckerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
