<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailSender_Adapter_SwiftmailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_sender.adapter.swiftmailer' shared service.
     *
     * @return \Sylius\Bundle\MailerBundle\Sender\Adapter\SwiftMailerAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Bundle/Sender/Adapter/SwiftMailerAdapter.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        $container->services['sylius.email_sender.adapter.swiftmailer'] = $instance = new \Sylius\Bundle\MailerBundle\Sender\Adapter\SwiftMailerAdapter(($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), $a);

        $instance->setEventDispatcher($a);

        return $instance;
    }
}
