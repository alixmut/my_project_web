<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gudetama_france_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GudetamaFranceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'youtube_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GudetamaFranceBundle\\Controller\\DefaultController::getPlaylistYoutubeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get_playlist_youtube',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gudetama_france_upload_subtitle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GudetamaFranceBundle\\Controller\\UploadSubtitleController::upload_subtitleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload_subtitle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gudetama_france_video' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GudetamaFranceBundle\\Controller\\VideoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/video',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ef_connect' => array (  0 =>   array (    0 => 'instance',    1 => 'homeFolder',  ),  1 =>   array (    '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',    'instance' => 'default',    'homeFolder' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'homeFolder',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'instance',    ),    2 =>     array (      0 => 'text',      1 => '/efconnect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'elfinder' => array (  0 =>   array (    0 => 'instance',    1 => 'homeFolder',  ),  1 =>   array (    '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',    'instance' => 'default',    'homeFolder' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'homeFolder',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'instance',    ),    2 =>     array (      0 => 'text',      1 => '/elfinder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
