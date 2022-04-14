<?php

namespace Container90ommTl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8bWnBAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8bWn_bA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8bWn_bA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exoRepo' => ['privates', 'App\\Repository\\ExerciseRepository', 'getExerciseRepositoryService', true],
            'mediaRepo' => ['privates', 'App\\Repository\\MediaRepository', 'getMediaRepositoryService', true],
            'questRepo' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
        ], [
            'exoRepo' => 'App\\Repository\\ExerciseRepository',
            'mediaRepo' => 'App\\Repository\\MediaRepository',
            'questRepo' => 'App\\Repository\\QuestionRepository',
        ]);
    }
}
