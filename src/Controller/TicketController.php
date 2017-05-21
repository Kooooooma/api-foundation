<?php

namespace EasemobTickets\Controller;

use Doctrine\ORM\Configuration;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Tools\Setup;
use EasemobTickets\Controller;
use Doctrine\ORM\EntityManager;

use EasemobTickets\Model\Product;
use EasemobTickets\Model\Category;

class TicketController extends Controller
{
    public function staffCreateTicket($id, $rid)
    {
        //初始化 EntityManager
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(MODEL_DIR), $isDevMode);
        //$config = Setup::createXMLMetadataConfiguration(array(\CONF_DIR.'/dbschema'), $isDevMode);
        $conn = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '123456',
            'host'     => '127.0.0.1',
            'port'     => 3306,
            'dbname'   => 'tickets',
            'chatset'  => 'utf-8'
        );

//        $config = new Configuration();
//        $config->setProxyDir(sys_get_temp_dir());
//        $config->setProxyNamespace('DoctrineProxies');
//        $config->setMetadataDriverImpl(new TicketXmlDriver(array(\CONF_DIR.'/dbschema')));

        $entityManager = EntityManager::create($conn, $config);

        //单表操作练习

        //插入
        $category = new Category();
        $category->setName('ship');

        $entityManager->persist($category);

        $product = new Product();
        $product->setName('fjdljfldjfldjfldjslfds');

        $entityManager->persist($product);
        $entityManager->flush();

        var_dump($product->getId());

        //查询
        /* Class not defined
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->select('name')
                     ->from('Product', 'p');

        $query = $queryBuilder->getQuery();
        var_dump($query->getArrayResult());
        */

        //更新
        //$product = new Product();
    }
}
