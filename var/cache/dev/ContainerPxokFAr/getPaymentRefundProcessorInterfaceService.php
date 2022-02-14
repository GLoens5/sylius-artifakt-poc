<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentRefundProcessorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Processor\PaymentRefundProcessorInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Processor\UiPayPalPaymentRefundProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PaymentRefundProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/UiPayPalPaymentRefundProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PayPalPaymentRefundProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/RefundPaymentApiInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/RefundPaymentApi.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Generator/PayPalAuthAssertionGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Generator/PayPalAuthAssertionGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/RefundReferenceNumberProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/RefundReferenceNumberProvider.php';

        return $container->services['Sylius\\PayPalPlugin\\Processor\\PaymentRefundProcessorInterface'] = new \Sylius\PayPalPlugin\Processor\UiPayPalPaymentRefundProcessor(new \Sylius\PayPalPlugin\Processor\PayPalPaymentRefundProcessor(($container->privates['Sylius\\PayPalPlugin\\Api\\CacheAuthorizeClientApiInterface'] ?? $container->load('getCacheAuthorizeClientApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\OrderDetailsApiInterface'] ?? $container->load('getOrderDetailsApiInterfaceService')), new \Sylius\PayPalPlugin\Api\RefundPaymentApi(($container->privates['Sylius\\PayPalPlugin\\Client\\PayPalClientInterface'] ?? $container->load('getPayPalClientInterfaceService'))), new \Sylius\PayPalPlugin\Generator\PayPalAuthAssertionGenerator(), new \Sylius\PayPalPlugin\Provider\RefundReferenceNumberProvider()));
    }
}
