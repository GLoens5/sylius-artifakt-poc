<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShipmentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shipment' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Form\Type\ShipmentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Form/Type/ShipmentType.php';

        return $container->services['sylius.form.type.shipment'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShipmentType('App\\Entity\\Shipping\\Shipment', $container->parameters['sylius.form.type.shipment.validation_groups']);
    }
}
