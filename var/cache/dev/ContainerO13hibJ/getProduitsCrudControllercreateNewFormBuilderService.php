<?php

namespace ContainerO13hibJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitsCrudControllercreateNewFormBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ddU3fuw.App\Controller\Admin\ProduitsCrudController::createNewFormBuilder()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ddU3fuw.App\\Controller\\Admin\\ProduitsCrudController::createNewFormBuilder()'] = ($container->privates['.service_locator.ddU3fuw'] ?? $container->load('get_ServiceLocator_DdU3fuwService'))->withContext('App\\Controller\\Admin\\ProduitsCrudController::createNewFormBuilder()', $container);
    }
}
