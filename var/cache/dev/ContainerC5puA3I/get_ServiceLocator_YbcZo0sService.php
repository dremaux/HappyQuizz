<?php

namespace ContainerC5puA3I;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YbcZo0sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YbcZo0s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YbcZo0s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agence' => ['privates', '.errored..service_locator.YbcZo0s.App\\Entity\\Agence', NULL, 'Cannot autowire service ".service_locator.YbcZo0s": it references class "App\\Entity\\Agence" but no such service exists.'],
        ], [
            'agence' => 'App\\Entity\\Agence',
        ]);
    }
}
