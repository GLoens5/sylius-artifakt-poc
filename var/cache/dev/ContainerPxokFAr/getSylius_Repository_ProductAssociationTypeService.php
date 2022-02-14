<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ProductAssociationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.product_association_type' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Doctrine\ORM\ProductAssociationTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Repository/ProductAssociationTypeRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Doctrine/ORM/ProductAssociationTypeRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['sylius.repository.product_association_type'] = new \Sylius\Bundle\ProductBundle\Doctrine\ORM\ProductAssociationTypeRepository($a, $a->getClassMetadata('App\\Entity\\Product\\ProductAssociationType'));
    }
}
