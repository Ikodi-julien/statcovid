<?php

namespace ContainerQJCxj7X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeValidator_LazyService extends App_KernelDevContainer
{
    /*
     * Gets the private '.maker.auto_command.make_validator.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.maker.auto_command.make_validator.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:validator', [], 'Creates a new validator and constraint class', false, function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_validator'] ?? $container->load('getMaker_AutoCommand_MakeValidatorService'));
        });
    }
}
