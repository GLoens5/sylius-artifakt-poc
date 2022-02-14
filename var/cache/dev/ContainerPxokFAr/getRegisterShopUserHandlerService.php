<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterShopUserHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\CommandHandler\RegisterShopUserHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\RegisterShopUserHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/RegisterShopUserHandler.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\CommandHandler\\RegisterShopUserHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\RegisterShopUserHandler(($container->services['sylius.factory.shop_user'] ?? $container->load('getSylius_Factory_ShopUserService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Sylius\\Bundle\\ApiBundle\\Provider\\CustomerProviderInterface'] ?? $container->load('getCustomerProviderInterfaceService')), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->services['sylius.shop_user.token_generator.email_verification'] ?? $container->load('getSylius_ShopUser_TokenGenerator_EmailVerificationService')), ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()));
    }
}
