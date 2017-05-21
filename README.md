## Easemob Tickets
使用 Symfony 的几个组件+doctrine构建的遵循MVC模式的 Restful API框架，不含视图层。

## nginx配置
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## Model层采用Doctrine 2 ORM
基于Symofony的开发模式，还需要自己包装一层父类Model。  
用该Model提供EntityManager的初始化以及Repository，QueryBuilder等操作对象的获取。 
参考：http://symfony.com/doc/current/doctrine.html

