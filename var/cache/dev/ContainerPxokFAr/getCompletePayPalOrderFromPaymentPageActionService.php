<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompletePayPalOrderFromPaymentPageActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\CompletePayPalOrderFromPaymentPageAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\CompletePayPalOrderFromPaymentPageAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/CompletePayPalOrderFromPaymentPageAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderFromPaymentPageAction'] = new \Sylius\PayPalPlugin\Controller\CompletePayPalOrderFromPaymentPageAction(($container->privates['Sylius\\PayPalPlugin\\Manager\\PaymentStateManagerInterface'] ?? $container->load('getPaymentStateManagerInterfaceService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['Sylius\\PayPalPlugin\\Provider\\OrderProviderInterface'] ?? $container->load('getOrderProviderInterfaceService')), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
