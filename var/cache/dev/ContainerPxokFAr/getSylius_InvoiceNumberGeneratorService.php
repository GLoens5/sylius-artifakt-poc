<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_InvoiceNumberGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.invoice_number_generator' shared service.
     *
     * @return \Sylius\Component\Core\Payment\IdBasedInvoiceNumberGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/InvoiceNumberGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Payment/IdBasedInvoiceNumberGenerator.php';

        return $container->services['sylius.invoice_number_generator'] = new \Sylius\Component\Core\Payment\IdBasedInvoiceNumberGenerator();
    }
}
