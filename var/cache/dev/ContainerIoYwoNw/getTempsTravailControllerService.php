<?php

namespace ContainerIoYwoNw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTempsTravailControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TempsTravailController' shared autowired service.
     *
     * @return \App\Controller\TempsTravailController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TempsTravailController.php';

        $container->services['App\\Controller\\TempsTravailController'] = $instance = new \App\Controller\TempsTravailController();

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\TempsTravailController', $container));

        return $instance;
    }
}
