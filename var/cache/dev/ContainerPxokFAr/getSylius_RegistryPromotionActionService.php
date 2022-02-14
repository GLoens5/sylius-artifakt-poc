<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_RegistryPromotionActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.registry_promotion_action' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['sylius.registry_promotion_action'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Promotion\\Action\\PromotionActionCommandInterface', 'promotion action');

        $instance->register('order_fixed_discount', ($container->services['sylius.promotion_action.fixed_discount'] ?? $container->load('getSylius_PromotionAction_FixedDiscountService')));
        $instance->register('unit_fixed_discount', ($container->services['sylius.promotion_action.unit_fixed_discount'] ?? $container->load('getSylius_PromotionAction_UnitFixedDiscountService')));
        $instance->register('order_percentage_discount', ($container->services['sylius.promotion_action.percentage_discount'] ?? $container->load('getSylius_PromotionAction_PercentageDiscountService')));
        $instance->register('unit_percentage_discount', ($container->services['sylius.promotion_action.unit_percentage_discount'] ?? $container->load('getSylius_PromotionAction_UnitPercentageDiscountService')));
        $instance->register('shipping_percentage_discount', ($container->services['sylius.promotion_action.shipping_percentage_discount'] ?? $container->load('getSylius_PromotionAction_ShippingPercentageDiscountService')));

        return $instance;
    }
}
