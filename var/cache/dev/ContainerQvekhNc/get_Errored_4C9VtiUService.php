<?php

namespace ContainerQvekhNc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_4C9VtiUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.4C9VtiU' shared service.
     *
     * @return \Symfony\Component\HtmlSanitizer\HtmlSanitizerInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\VatController::index()": the $htmlSanitizer argument is type-hinted with the non-existent class or interface: "Symfony\\Component\\HtmlSanitizer\\HtmlSanitizerInterface".');
    }
}