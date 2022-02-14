<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_TranslationOrderNameAndLocaleFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.translation_order_name_and_locale_filter' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\Filters\TranslationOrderNameAndLocaleFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Doctrine/Filters/TranslationOrderNameAndLocaleFilter.php';

        return $container->privates['sylius.api.translation_order_name_and_locale_filter'] = new \Sylius\Bundle\ApiBundle\Doctrine\Filters\TranslationOrderNameAndLocaleFilter(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
