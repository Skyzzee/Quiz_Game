<?php

namespace ContainerDJQCsoq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9Wxqu8SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9Wxqu8S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Wxqu8S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'recaptcha' => ['privates', 'App\\Recaptcha\\RecaptchaValidator', 'getRecaptchaValidatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'entityManager' => '?',
            'recaptcha' => 'App\\Recaptcha\\RecaptchaValidator',
            'userPasswordHasher' => '?',
        ]);
    }
}
