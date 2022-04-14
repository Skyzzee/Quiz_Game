<?php

namespace ContainerDJQCsoq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3_9X6dfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3.9X6df' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3.9X6df'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'result' => ['privates', '.errored..service_locator.3.9X6df.App\\Entity\\Result', NULL, 'Cannot autowire service ".service_locator.3.9X6df": it references class "App\\Entity\\Result" but no such service exists.'],
            'resultRepository' => ['privates', 'App\\Repository\\ResultRepository', 'getResultRepositoryService', true],
        ], [
            'result' => 'App\\Entity\\Result',
            'resultRepository' => 'App\\Repository\\ResultRepository',
        ]);
    }
}
