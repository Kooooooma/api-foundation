<?php

namespace ApiFoundation;

use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class App
{
    public function run()
    {
        $locator = new FileLocator(CONF_DIR);
        $loader  = new YamlFileLoader($locator);
        $routes  = $loader->load('routes.yml');

        $context = new RequestContext('/');
        $matcher = new UrlMatcher($routes, $context);

        $parameters = $matcher->match($_SERVER['REQUEST_URI']);
        if ( empty($parameters) ) throw new ResourceNotFoundException();

        list($class, $action) = explode("::", $parameters['_controller']);
        $class = __NAMESPACE__.'\\Controller\\'.$class;

        $args = array();
        foreach ( $parameters as $key => $val ) {
            if ( in_array($key, array('_controller', '_route')) ) continue;
            $args[] = $val;
        }

        call_user_func_array(array(new $class(), $action), $args);
    }
}