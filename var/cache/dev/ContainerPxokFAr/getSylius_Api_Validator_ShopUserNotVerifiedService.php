<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_Validator_ShopUserNotVerifiedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.validator.shop_user_not_verified' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\ShopUserNotVerifiedValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Validator/Constraints/ShopUserNotVerifiedValidator.php';

        return $container->privates['sylius.api.validator.shop_user_not_verified'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\ShopUserNotVerifiedValidator(($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
    }
}
