<?php

namespace ContainerQJCxj7X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService extends App_KernelDevContainer
{
    /*
     * Gets the private 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.listeners.doctrine_token_provider_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
