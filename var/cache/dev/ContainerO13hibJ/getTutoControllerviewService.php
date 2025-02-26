<?php

namespace ContainerO13hibJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTutoControllerviewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UsjRISV.App\Controller\TutoController::view()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UsjRISV.App\\Controller\\TutoController::view()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'entityManager' => 'App\\Repository\\ProduitsRepository',
        ]))->withContext('App\\Controller\\TutoController::view()', $container);
    }
}
