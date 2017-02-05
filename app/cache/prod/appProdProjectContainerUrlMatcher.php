<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
            }

            // elfinder
            if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
