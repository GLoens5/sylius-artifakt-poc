<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderPaymentProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_payment_provider' shared service.
     *
     * @return \Sylius\Component\Core\Payment\Provider\OrderPaymentProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/Provider/OrderPaymentProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/Provider/OrderPaymentProvider.php';

        return $container->services['sylius.order_payment_provider'] = new \Sylius\Component\Core\Payment\Provider\OrderPaymentProvider(($container->services['Sylius\\Component\\Payment\\Resolver\\DefaultPaymentMethodResolverInterface'] ?? $container->load('getDefaultPaymentMethodResolverInterfaceService')), ($container->services['Sylius\\Component\\Payment\\Factory\\PaymentFactoryInterface'] ?? $container->load('getPaymentFactoryInterfaceService')), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()));
    }
}
