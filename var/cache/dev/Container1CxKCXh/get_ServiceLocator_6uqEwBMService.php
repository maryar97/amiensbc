<?php

namespace Container1CxKCXh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6uqEwBMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6uqEwBM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6uqEwBM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AeroboxeController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BaController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BeaController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BpController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\CartController::addToRoute' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.MoWAc0k', 'get_ServiceLocator_MoWAc0kService', true],
            'App\\Controller\\CartController::removeAll' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController::removeToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\FormedeboxeController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.QaaDzHL', 'get_ServiceLocator_QaaDzHLService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AeroboxeController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BaController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BeaController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BpController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\CartController:addToRoute' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.MoWAc0k', 'get_ServiceLocator_MoWAc0kService', true],
            'App\\Controller\\CartController:removeAll' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController:removeToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\FormedeboxeController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.QaaDzHL', 'get_ServiceLocator_QaaDzHLService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AeroboxeController::index' => '?',
            'App\\Controller\\BaController::index' => '?',
            'App\\Controller\\BeaController::index' => '?',
            'App\\Controller\\BpController::index' => '?',
            'App\\Controller\\CartController::addToRoute' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::removeAll' => '?',
            'App\\Controller\\CartController::removeToCart' => '?',
            'App\\Controller\\FormedeboxeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AeroboxeController:index' => '?',
            'App\\Controller\\BaController:index' => '?',
            'App\\Controller\\BeaController:index' => '?',
            'App\\Controller\\BpController:index' => '?',
            'App\\Controller\\CartController:addToRoute' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:removeAll' => '?',
            'App\\Controller\\CartController:removeToCart' => '?',
            'App\\Controller\\FormedeboxeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
