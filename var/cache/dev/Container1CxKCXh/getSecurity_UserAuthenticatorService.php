<?php

namespace Container1CxKCXh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user_authenticator' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\UserAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/UserAuthenticator.php';

        return $container->privates['security.user_authenticator'] = new \Symfony\Bundle\SecurityBundle\Security\UserAuthenticator(($container->privates['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)), new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'security.authenticator.manager.main', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.main'] ?? $container->load('getSecurity_Authenticator_Manager_MainService'))]), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
