<?php

namespace ContainerO13hibJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTutoCrudControllerbatchDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AvCdmNt.App\Controller\Admin\TutoCrudController::batchDelete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AvCdmNt.App\\Controller\\Admin\\TutoCrudController::batchDelete()'] = ($container->privates['.service_locator.AvCdmNt'] ?? $container->load('get_ServiceLocator_AvCdmNtService'))->withContext('App\\Controller\\Admin\\TutoCrudController::batchDelete()', $container);
    }
}
