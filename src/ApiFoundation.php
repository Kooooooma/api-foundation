<?php

namespace ApiFoundation;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader as RoutYamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader as DIYamlFileLoader;

class ApiFoundation
{
    /**
     * ApiFoundation DI Container
     */
    public static $container = null;

    public function run()
    {
        $locator = new FileLocator(CONF_DIR);

        //1,路由
        $loader  = new RoutYamlFileLoader($locator);
        $routes  = $loader->load('routes.yml');

        $context = new RequestContext('/');
        $matcher = new UrlMatcher($routes, $context);

        $parameters = $matcher->match($_SERVER['REQUEST_URI']);
        if ( empty($parameters) ) throw new ResourceNotFoundException();

        //2,注册服务
        self::$container = new ContainerBuilder();
        $loader = new DIYamlFileLoader(self::$container, $locator);
        $loader->load('services.yml');

        //3,调用控制器
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