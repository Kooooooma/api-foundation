<?php

namespace ApiFoundation;

use PHPErrors\PHPErrors;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
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
        $locator = new FileLocator(CONF_PATH);

        //启用错误处理
        $errorHandler = PHPErrors::enable(E_ALL, defined('APP_DEBUG') ? APP_DEBUG : false);

        //注册服务
        self::$container = new ContainerBuilder();
        $loader = new DIYamlFileLoader(self::$container, $locator);
        $loader->load('services.yml');

        //检测日志记录器,存在则设置
        try {
            if ( ($logger = self::$container->get('logger')) ) {
                $errorHandler->setLogger($logger);
            }
        } catch (\Exception $e) {
            // TODO: Do nothing
        }

        //路由
        $loader = new RoutYamlFileLoader($locator);
        $routes = $loader->load('routes.yml');

        $context = new RequestContext();
        $context->fromRequest(Request::createFromGlobals());
        $matcher = new UrlMatcher($routes, $context);

        $parameters = $matcher->match($_SERVER['REQUEST_URI']);
        if ( empty($parameters) ) throw new ResourceNotFoundException();

        //调用控制器
        list($class, $action) = explode("::", $parameters['_controller']);
        $class = '\\'.APP_NAMESPACE.'\\Controller\\'.$class;

        $args = array();
        foreach ( $parameters as $key => $val ) {
            if ( in_array($key, array('_controller', '_route')) ) continue;
            $args[] = $val;
        }

        call_user_func_array(array(new $class(), $action), $args);
    }
}