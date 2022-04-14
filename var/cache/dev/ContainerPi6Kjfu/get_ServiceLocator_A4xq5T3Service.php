<?php

namespace ContainerPi6Kjfu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A4xq5T3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A4xq5T3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A4xq5T3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exerciseRepository' => ['privates', 'App\\Repository\\ExerciseRepository', 'getExerciseRepositoryService', true],
        ], [
            'exerciseRepository' => 'App\\Repository\\ExerciseRepository',
        ]);
    }
}
