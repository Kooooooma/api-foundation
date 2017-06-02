## api-foundation
使用 Symfony 的Routing组件+doctrine构建的遵循MVC模式的 Restful API框架，不含视图层。   
其它相关组件请参考 composer.json

## nginx配置
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
## 路由采用 Symfony/Routing 组件
使用参考: https://packagist.org/packages/symfony/routing
配置文件为: conf/routes.yml 

## Model层采用Doctrine 2 ORM
使用请参考：http://symfony.com/doc/current/doctrine.html

## 错误处理采用 php-errors
使用参考: https://github.com/KomaBeyond/php-errors

## 使用
* 使用 git clone 当前项目到本地
* 配置项目命名空间，假设当前项目名为 App，则修改如下：所有 App 字符都需修改
```php
//index.php 文件中
/******* 用户自定义常量区 ********/

define('APP_NAMESPACE', 'App'); //修改应用名称,需要修改对应的composer.json
define('APP_PATH', SRC_PATH.'/'.APP_NAMESPACE);
define('APP_DEBUG', true);

/******* 用户自定义常量区 ********/

//composer.json 文件中
"autoload": {
    "psr-4": {
        "ApiFoundation\\": "src/",
        "App\\": "src/App/"
    }
},
```
* 在项目目录中执行 composer install
* 配置虚拟主机 document_root 到项目目录 web 目录下
* 重启服务器访问即可
* 项目目录位于 App 目录下，项目使用的 Controller, Model, Service 文件均位于 App 目录下，系统使用的文件位于 src 根目录下。
* 通过在 conf/services.yml 文件中指定 logger 服务，提供项目错误日志记录功能（可选，但是推荐），使用参看示例代码，Logger 类需要遵循 psr-0

