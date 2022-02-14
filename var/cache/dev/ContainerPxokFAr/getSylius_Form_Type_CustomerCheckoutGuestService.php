<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CustomerCheckoutGuestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.customer_checkout_guest' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerCheckoutGuestType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Customer/CustomerCheckoutGuestType.php';

        return $container->services['sylius.form.type.customer_checkout_guest'] = new \Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerCheckoutGuestType('App\\Entity\\Customer\\Customer', $container->parameters['sylius.form.type.customer_checkout_guest.validation_groups'], ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')), ($container->services['sylius.factory.customer'] ?? ($container->services['sylius.factory.customer'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\Customer'))));
    }
}
