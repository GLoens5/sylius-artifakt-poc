<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Installer_Checker_SyliusRequirementsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.installer.checker.sylius_requirements' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Installer\Checker\SyliusRequirementsChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Checker/RequirementsCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Checker/SyliusRequirementsChecker.php';

        return $container->services['sylius.installer.checker.sylius_requirements'] = new \Sylius\Bundle\CoreBundle\Installer\Checker\SyliusRequirementsChecker(($container->services['sylius.requirements'] ?? $container->load('getSylius_RequirementsService')));
    }
}
