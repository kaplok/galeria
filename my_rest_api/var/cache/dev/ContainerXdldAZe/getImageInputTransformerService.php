<?php

namespace ContainerXdldAZe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageInputTransformerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Transformer\ImageInputTransformer' shared autowired service.
     *
     * @return \App\Transformer\ImageInputTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataTransformer'.\DIRECTORY_SEPARATOR.'DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Transformer'.\DIRECTORY_SEPARATOR.'ImageInputTransformer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'FileService.php';

        return $container->privates['App\\Transformer\\ImageInputTransformer'] = new \App\Transformer\ImageInputTransformer(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), new \App\Service\FileService(), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')));
    }
}
