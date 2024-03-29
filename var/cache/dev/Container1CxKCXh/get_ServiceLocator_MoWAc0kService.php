<?php

namespace Container1CxKCXh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MoWAc0kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MoWAc0k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MoWAc0k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'requestStack' => '?',
        ]);
    }
}
