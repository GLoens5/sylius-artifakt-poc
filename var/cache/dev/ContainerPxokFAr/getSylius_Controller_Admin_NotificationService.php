<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Admin_NotificationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.admin.notification' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Controller\NotificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Controller/NotificationController.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/RequestFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/ResponseFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/MessageFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/message/src/MessageFactory/GuzzleMessageFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

        return $container->services['sylius.controller.admin.notification'] = new \Sylius\Bundle\AdminBundle\Controller\NotificationController(($container->privates['sylius.http_client'] ?? ($container->privates['sylius.http_client'] = new \GuzzleHttp\Client())), new \Http\Message\MessageFactory\GuzzleMessageFactory(), 'http://gus.sylius.com/version', 'dev');
    }
}
