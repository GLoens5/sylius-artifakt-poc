<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductVariantGenerationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_variant_generation' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductVariantGenerationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductVariantGenerationType.php';

        return $container->services['sylius.form.type.product_variant_generation'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductVariantGenerationType('App\\Entity\\Product\\ProductVariant', $container->parameters['sylius.form.type.product_variant_generation.validation_groups']);
    }
}
