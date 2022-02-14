<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Form_Extension_GatewayFactoriesChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.form.extension.gateway_factories_choice' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Form\Extension\GatewayFactoriesChoiceTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Form/Extension/GatewayFactoriesChoiceTypeExtension.php';

        return $container->services['payum.form.extension.gateway_factories_choice'] = new \Payum\Bundle\PayumBundle\Form\Extension\GatewayFactoriesChoiceTypeExtension(($container->services['payum'] ?? $container->load('getPayumService')));
    }
}
