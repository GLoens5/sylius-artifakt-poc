<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PayumExtension_UpdatePaymentStateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.payum_extension.update_payment_state' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Extension\UpdatePaymentStateExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Extension/UpdatePaymentStateExtension.php';

        return $container->services['sylius.payum_extension.update_payment_state'] = new \Sylius\Bundle\PayumBundle\Extension\UpdatePaymentStateExtension(($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()));
    }
}
