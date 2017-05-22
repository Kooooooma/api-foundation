## api-foundation
使用 Symfony 的Routing组件+doctrine构建的遵循MVC模式的 Restful API框架，不含视图层。   
其它相关组件请参考 composer.json

## nginx配置
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## Model层采用Doctrine 2 ORM
使用请参考：http://symfony.com/doc/current/doctrine.html

## 使用
* 使用 git clone 当前项目到本地
* 在项目目录中执行 composer install
* 配置虚拟主机 document_root 到项目目录 web 目录下
* 重启服务器访问即可
* 示例 Controller, Model, Service 都在对应目录下，按规则开发即可