<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Converter_ReplyToHttpResponseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.converter.reply_to_http_response' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\ReplyToSymfonyResponseConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/ReplyToSymfonyResponseConverter.php';

        return $container->services['payum.converter.reply_to_http_response'] = new \Payum\Core\Bridge\Symfony\ReplyToSymfonyResponseConverter();
    }
}
