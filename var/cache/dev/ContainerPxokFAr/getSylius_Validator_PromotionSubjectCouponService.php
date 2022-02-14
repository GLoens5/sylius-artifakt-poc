<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_PromotionSubjectCouponService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.promotion_subject_coupon' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Validator\PromotionSubjectCouponValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Validator/PromotionSubjectCouponValidator.php';

        return $container->services['sylius.validator.promotion_subject_coupon'] = new \Sylius\Bundle\PromotionBundle\Validator\PromotionSubjectCouponValidator(($container->services['sylius.promotion_eligibility_checker'] ?? $container->load('getSylius_PromotionEligibilityCheckerService')));
    }
}
