<?php

namespace ContainerCxlHYK2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OpDQTGIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.opDQTGI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.opDQTGI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminController::new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\DifficultyController::delete' => ['privates', '.service_locator.TAvjUJ8', 'get_ServiceLocator_TAvjUJ8Service', true],
            'App\\Controller\\DifficultyController::edit' => ['privates', '.service_locator.TAvjUJ8', 'get_ServiceLocator_TAvjUJ8Service', true],
            'App\\Controller\\DifficultyController::index' => ['privates', '.service_locator.uqv3yfb', 'get_ServiceLocator_Uqv3yfbService', true],
            'App\\Controller\\DifficultyController::new' => ['privates', '.service_locator.uqv3yfb', 'get_ServiceLocator_Uqv3yfbService', true],
            'App\\Controller\\ExerciseController::delete' => ['privates', '.service_locator.cwSPvFs', 'get_ServiceLocator_CwSPvFsService', true],
            'App\\Controller\\ExerciseController::edit' => ['privates', '.service_locator.cwSPvFs', 'get_ServiceLocator_CwSPvFsService', true],
            'App\\Controller\\ExerciseController::index' => ['privates', '.service_locator.A4xq5T3', 'get_ServiceLocator_A4xq5T3Service', true],
            'App\\Controller\\ExerciseController::new' => ['privates', '.service_locator.A4xq5T3', 'get_ServiceLocator_A4xq5T3Service', true],
            'App\\Controller\\MainController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\MainController::register' => ['privates', '.service_locator.9Wxqu8S', 'get_ServiceLocator_9Wxqu8SService', true],
            'App\\Controller\\QuestionController::questionMaker' => ['privates', '.service_locator.WXcrdks', 'get_ServiceLocator_WXcrdksService', true],
            'App\\Controller\\QuestionController::questionShow' => ['privates', '.service_locator.8bWn_bA', 'get_ServiceLocator_8bWnBAService', true],
            'App\\Controller\\ResultController::delete' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'App\\Controller\\ResultController::edit' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'App\\Controller\\ResultController::index' => ['privates', '.service_locator.xrrkaHX', 'get_ServiceLocator_XrrkaHXService', true],
            'App\\Controller\\ResultController::new' => ['privates', '.service_locator.xrrkaHX', 'get_ServiceLocator_XrrkaHXService', true],
            'App\\Controller\\ResultController::show' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminController:new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\DifficultyController:delete' => ['privates', '.service_locator.TAvjUJ8', 'get_ServiceLocator_TAvjUJ8Service', true],
            'App\\Controller\\DifficultyController:edit' => ['privates', '.service_locator.TAvjUJ8', 'get_ServiceLocator_TAvjUJ8Service', true],
            'App\\Controller\\DifficultyController:index' => ['privates', '.service_locator.uqv3yfb', 'get_ServiceLocator_Uqv3yfbService', true],
            'App\\Controller\\DifficultyController:new' => ['privates', '.service_locator.uqv3yfb', 'get_ServiceLocator_Uqv3yfbService', true],
            'App\\Controller\\ExerciseController:delete' => ['privates', '.service_locator.cwSPvFs', 'get_ServiceLocator_CwSPvFsService', true],
            'App\\Controller\\ExerciseController:edit' => ['privates', '.service_locator.cwSPvFs', 'get_ServiceLocator_CwSPvFsService', true],
            'App\\Controller\\ExerciseController:index' => ['privates', '.service_locator.A4xq5T3', 'get_ServiceLocator_A4xq5T3Service', true],
            'App\\Controller\\ExerciseController:new' => ['privates', '.service_locator.A4xq5T3', 'get_ServiceLocator_A4xq5T3Service', true],
            'App\\Controller\\MainController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\MainController:register' => ['privates', '.service_locator.9Wxqu8S', 'get_ServiceLocator_9Wxqu8SService', true],
            'App\\Controller\\QuestionController:questionMaker' => ['privates', '.service_locator.WXcrdks', 'get_ServiceLocator_WXcrdksService', true],
            'App\\Controller\\QuestionController:questionShow' => ['privates', '.service_locator.8bWn_bA', 'get_ServiceLocator_8bWnBAService', true],
            'App\\Controller\\ResultController:delete' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'App\\Controller\\ResultController:edit' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'App\\Controller\\ResultController:index' => ['privates', '.service_locator.xrrkaHX', 'get_ServiceLocator_XrrkaHXService', true],
            'App\\Controller\\ResultController:new' => ['privates', '.service_locator.xrrkaHX', 'get_ServiceLocator_XrrkaHXService', true],
            'App\\Controller\\ResultController:show' => ['privates', '.service_locator.3.9X6df', 'get_ServiceLocator_3_9X6dfService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::edit' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::new' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\DifficultyController::delete' => '?',
            'App\\Controller\\DifficultyController::edit' => '?',
            'App\\Controller\\DifficultyController::index' => '?',
            'App\\Controller\\DifficultyController::new' => '?',
            'App\\Controller\\ExerciseController::delete' => '?',
            'App\\Controller\\ExerciseController::edit' => '?',
            'App\\Controller\\ExerciseController::index' => '?',
            'App\\Controller\\ExerciseController::new' => '?',
            'App\\Controller\\MainController::login' => '?',
            'App\\Controller\\MainController::register' => '?',
            'App\\Controller\\QuestionController::questionMaker' => '?',
            'App\\Controller\\QuestionController::questionShow' => '?',
            'App\\Controller\\ResultController::delete' => '?',
            'App\\Controller\\ResultController::edit' => '?',
            'App\\Controller\\ResultController::index' => '?',
            'App\\Controller\\ResultController::new' => '?',
            'App\\Controller\\ResultController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:edit' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:new' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\DifficultyController:delete' => '?',
            'App\\Controller\\DifficultyController:edit' => '?',
            'App\\Controller\\DifficultyController:index' => '?',
            'App\\Controller\\DifficultyController:new' => '?',
            'App\\Controller\\ExerciseController:delete' => '?',
            'App\\Controller\\ExerciseController:edit' => '?',
            'App\\Controller\\ExerciseController:index' => '?',
            'App\\Controller\\ExerciseController:new' => '?',
            'App\\Controller\\MainController:login' => '?',
            'App\\Controller\\MainController:register' => '?',
            'App\\Controller\\QuestionController:questionMaker' => '?',
            'App\\Controller\\QuestionController:questionShow' => '?',
            'App\\Controller\\ResultController:delete' => '?',
            'App\\Controller\\ResultController:edit' => '?',
            'App\\Controller\\ResultController:index' => '?',
            'App\\Controller\\ResultController:new' => '?',
            'App\\Controller\\ResultController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
