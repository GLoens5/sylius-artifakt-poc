<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_AddressChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.address_choice' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\AddressChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/AddressChoiceType.php';

        return $container->services['sylius.form.type.address_choice'] = new \Sylius\Bundle\CoreBundle\Form\Type\AddressChoiceType(($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')));
    }
}
