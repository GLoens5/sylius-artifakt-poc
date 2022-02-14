<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Anonymous_ShopService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.anonymous.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.anonymous.shop" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.anonymous.shop" service is deprecated, use the new authenticator system instead.');

        return $container->privates['security.authentication.listener.anonymous.shop'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $container->getParameter('container.build_hash'), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), ($container->services['security.authentication_manager'] ?? $container->load('getSecurity_AuthenticationManagerService')));
    }
}
