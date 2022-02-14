<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductAssociationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_association_type' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductAssociationTypeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductAssociationTypeType.php';

        return $container->services['sylius.form.type.product_association_type'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductAssociationTypeType('App\\Entity\\Product\\ProductAssociationType', $container->parameters['sylius.form.type.product_association_type.validation_groups']);
    }
}
