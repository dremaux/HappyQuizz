<?php

namespace ContainerCsiaGWa;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShopControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ShopController' shared autowired service.
     *
     * @return \App\Controller\ShopController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ShopController.php';

        $container->services['App\\Controller\\ShopController'] = $instance = new \App\Controller\ShopController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\ShopController', $container));

        return $instance;
    }
}
