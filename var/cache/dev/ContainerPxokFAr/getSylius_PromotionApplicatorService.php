<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_applicator' shared service.
     *
     * @return \Sylius\Component\Promotion\Action\PromotionApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionApplicator.php';

        return $container->services['sylius.promotion_applicator'] = new \Sylius\Component\Promotion\Action\PromotionApplicator(($container->services['sylius.registry_promotion_action'] ?? $container->load('getSylius_RegistryPromotionActionService')));
    }
}
