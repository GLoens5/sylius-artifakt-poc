<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_UserMailerListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.user_mailer_listener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\MailerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/MailerListener.php';

        return $container->privates['sylius.listener.user_mailer_listener'] = new \Sylius\Bundle\CoreBundle\EventListener\MailerListener(($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService')), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $container->getLocaleContextInterfaceService()));
    }
}
