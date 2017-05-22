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

