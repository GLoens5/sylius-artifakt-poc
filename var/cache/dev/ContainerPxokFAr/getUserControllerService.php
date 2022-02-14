<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\UserBundle\Controller\UserController' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Controller/UserController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/MetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/Metadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/SingleResourceProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/SingleResourceProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/DisabledAuthorizationChecker.php';

        $container->services['Sylius\\Bundle\\UserBundle\\Controller\\UserController'] = $instance = new \Sylius\Bundle\UserBundle\Controller\UserController(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService())->get('sylius.shop_user'), ($container->privates['sylius.resource_controller.request_configuration_factory'] ?? $container->load('getSylius_ResourceController_RequestConfigurationFactoryService')), ($container->privates['sylius.resource_controller.view_handler'] ?? $container->load('getSylius_ResourceController_ViewHandlerService')), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')), ($container->services['sylius.factory.shop_user'] ?? $container->load('getSylius_Factory_ShopUserService')), ($container->privates['Sylius\\PayPalPlugin\\Factory\\PayPalPaymentMethodNewResourceFactory'] ?? $container->load('getPayPalPaymentMethodNewResourceFactoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sylius.resource_controller.single_resource_provider'] ?? ($container->privates['sylius.resource_controller.single_resource_provider'] = new \Sylius\Bundle\ResourceBundle\Controller\SingleResourceProvider())), ($container->privates['sylius.resource_controller.resources_collection_provider'] ?? $container->load('getSylius_ResourceController_ResourcesCollectionProviderService')), ($container->privates['sylius.resource_controller.form_factory'] ?? $container->load('getSylius_ResourceController_FormFactoryService')), ($container->privates['sylius.resource_controller.redirect_handler'] ?? $container->load('getSylius_ResourceController_RedirectHandlerService')), ($container->privates['sylius.resource_controller.flash_helper'] ?? $container->load('getSylius_ResourceController_FlashHelperService')), ($container->privates['sylius.resource_controller.authorization_checker.disabled'] ?? ($container->privates['sylius.resource_controller.authorization_checker.disabled'] = new \Sylius\Bundle\ResourceBundle\Controller\DisabledAuthorizationChecker())), ($container->privates['sylius.resource_controller.event_dispatcher'] ?? $container->load('getSylius_ResourceController_EventDispatcherService')), ($container->privates['sylius.resource_controller.state_machine'] ?? $container->load('getSylius_ResourceController_StateMachineService')), ($container->privates['sylius.custom_resource_controller.resource_update_handler'] ?? $container->load('getSylius_CustomResourceController_ResourceUpdateHandlerService')), ($container->privates['sylius.custom_resource_controller.resource_delete_handler'] ?? $container->load('getSylius_CustomResourceController_ResourceDeleteHandlerService')));

        $instance->setContainer($container);

        return $instance;
    }
}
