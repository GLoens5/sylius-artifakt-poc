<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_RssService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.service.rss' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EditableBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/RssBlockService.php';

        return $container->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
