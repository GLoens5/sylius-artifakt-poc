<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionRule_ContainsProductConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion_rule.contains_product_configuration' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Rule\ContainsProductConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Promotion/Rule/ContainsProductConfigurationType.php';

        return $container->services['sylius.form.type.promotion_rule.contains_product_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Rule\ContainsProductConfigurationType(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
    }
}
