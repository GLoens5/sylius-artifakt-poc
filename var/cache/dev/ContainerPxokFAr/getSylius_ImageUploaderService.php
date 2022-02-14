<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ImageUploaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.image_uploader' shared service.
     *
     * @return \Sylius\Component\Core\Uploader\ImageUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Uploader/ImageUploaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Uploader/ImageUploader.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Generator/ImagePathGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Generator/UploadedImagePathGenerator.php';

        return $container->services['sylius.image_uploader'] = new \Sylius\Component\Core\Uploader\ImageUploader(($container->services['knp_gaufrette.filesystem_map'] ?? $container->load('getKnpGaufrette_FilesystemMapService'))->get('sylius_image'), ($container->services['Sylius\\Component\\Core\\Generator\\ImagePathGeneratorInterface'] ?? ($container->services['Sylius\\Component\\Core\\Generator\\ImagePathGeneratorInterface'] = new \Sylius\Component\Core\Generator\UploadedImagePathGenerator())));
    }
}
