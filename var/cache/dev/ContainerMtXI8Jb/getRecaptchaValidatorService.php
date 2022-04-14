<?php

namespace ContainerMtXI8Jb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecaptchaValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Recaptcha\RecaptchaValidator' shared autowired service.
     *
     * @return \App\Recaptcha\RecaptchaValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Recaptcha'.\DIRECTORY_SEPARATOR.'RecaptchaValidator.php';

        return $container->privates['App\\Recaptcha\\RecaptchaValidator'] = new \App\Recaptcha\RecaptchaValidator(($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
