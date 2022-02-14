<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ProductReview_AverageRatingUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.product_review.average_rating_updater' shared service.
     *
     * @return \Sylius\Bundle\ReviewBundle\Updater\AverageRatingUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Updater/ReviewableRatingUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Updater/AverageRatingUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Review/Calculator/ReviewableRatingCalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Review/Calculator/AverageRatingCalculator.php';

        return $container->services['sylius.product_review.average_rating_updater'] = new \Sylius\Bundle\ReviewBundle\Updater\AverageRatingUpdater(($container->services['sylius.average_rating_calculator'] ?? ($container->services['sylius.average_rating_calculator'] = new \Sylius\Component\Review\Calculator\AverageRatingCalculator())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
