<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Exception_Renderer_InlineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.exception.renderer.inline' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineRenderer.php';

        return $container->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), '@SonataBlock/Block/block_exception.html.twig');
    }
}
