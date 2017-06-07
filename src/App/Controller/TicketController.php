<?php

namespace App\Controller;

use ApiFoundation\Controller;
use App\Model\Product;

class TicketController extends Controller
{
    public function staffCreateTicket($id, $rid)
    {
        //0,测试DI
        $em = $this->getDoctrine()->getManager();
//        var_dump($em);

        //1,单表操作
        $this->singleTable();

        //2,关联表操作
//        $this->relateOneToManyTable();
    }

    public function relateOneToManyTable()
    {
        //分类不存在时插入
//        $category = new Category();
//        $category->setName("ship");

        //分类存在时插入
//        $categoryRepository = $this->getDoctrine()->getRepository('Category');
        $categoryRepository = null;
        $category = $categoryRepository->find(1);

        $product = new Product();
        $product->setName('boat-1');

        //填充关联关系
        $product->setCategory($category);

        //持久化
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);

        $em->flush();
    }

    public function singleTable()
    {
        $em = $this->getDoctrine()->getManager();
        $productRepository = $this->getDoctrine()->getRepository('Product');

        //插入
        $product = new Product();

        $product->setName("p4");

        $em->persist($product);
        $em->flush();

        echo $product->getId();

        //查询
//        $products = $productRepository->findAll();
//        $products = $productRepository->find(1);

//        var_dump($products);

//        foreach ( $products as $p ) {
//            echo sprintf("-%s\n", $p->getName());
//        }

        //更新
//        $product = $productRepository->find(1);
//        $product->setName('new 1 name');
//
//        $em->persist($product);
//        $em->flush();

        //删除
//        $product = $productRepository->find(1);
//        $em->remove($product);
//        $em->flush();
    }
}
