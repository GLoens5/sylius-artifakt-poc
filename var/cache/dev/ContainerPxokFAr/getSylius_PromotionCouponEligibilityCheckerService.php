<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionCouponEligibilityCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_coupon_eligibility_checker' shared service.
     *
     * @return \Sylius\Component\Promotion\Checker\Eligibility\CompositePromotionCouponEligibilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionCouponEligibilityCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/CompositePromotionCouponEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionCouponDurationEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionCouponUsageLimitEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Eligibility/PromotionCouponPerCustomerUsageLimitEligibilityChecker.php';

        return $container->services['sylius.promotion_coupon_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\CompositePromotionCouponEligibilityChecker([0 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionCouponDurationEligibilityChecker(), 1 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionCouponUsageLimitEligibilityChecker(), 2 => new \Sylius\Component\Core\Promotion\Checker\Eligibility\PromotionCouponPerCustomerUsageLimitEligibilityChecker(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()))]);
    }
}
