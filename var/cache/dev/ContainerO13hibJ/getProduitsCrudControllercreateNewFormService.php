<?php

namespace ContainerO13hibJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitsCrudControllercreateNewFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ddU3fuw.App\Controller\Admin\ProduitsCrudController::createNewForm()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ddU3fuw.App\\Controller\\Admin\\ProduitsCrudController::createNewForm()'] = ($container->privates['.service_locator.ddU3fuw'] ?? $container->load('get_ServiceLocator_DdU3fuwService'))->withContext('App\\Controller\\Admin\\ProduitsCrudController::createNewForm()', $container);
    }
}
