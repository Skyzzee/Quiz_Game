<?php

namespace Container3FmOvNx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6bLDWsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O6bLDWs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O6bLDWs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exercise' => ['privates', '.errored..service_locator.O6bLDWs.App\\Entity\\Exercise', NULL, 'Cannot autowire service ".service_locator.O6bLDWs": it references class "App\\Entity\\Exercise" but no such service exists.'],
        ], [
            'exercise' => 'App\\Entity\\Exercise',
        ]);
    }
}