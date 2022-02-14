<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_CartItemAvailabilityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.cart_item_availability' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\CartItemAvailabilityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/CartItemAvailabilityValidator.php';

        return $container->services['sylius.validator.cart_item_availability'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\CartItemAvailabilityValidator(($container->services['sylius.availability_checker.default'] ?? ($container->services['sylius.availability_checker.default'] = new \Sylius\Component\Inventory\Checker\AvailabilityChecker())));
    }
}
