<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_DataTransformer_ProductsToProductAssociationsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.data_transformer.products_to_product_associations' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\DataTransformer\ProductsToProductAssociationsTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/DataTransformer/ProductsToProductAssociationsTransformer.php';

        return $container->services['sylius.form.type.data_transformer.products_to_product_associations'] = new \Sylius\Bundle\ProductBundle\Form\DataTransformer\ProductsToProductAssociationsTransformer(($container->services['sylius.factory.product_association'] ?? ($container->services['sylius.factory.product_association'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductAssociation'))), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')));
    }
}
