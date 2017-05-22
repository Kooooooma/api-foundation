<?php

namespace ApiFoundation\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Doctrine
{
    private $entityManager = null;

    public function __construct(Array $config)
    {
        $conf = Setup::createAnnotationMetadataConfiguration(array($config['path']), $config['devmode']);
        $conn = array();

        foreach ( $config as $key => $val ) {
            if ( in_array($key, array('path', 'devmode')) ) continue;
            $conn[$key] = $val;
        }

        $this->entityManager = EntityManager::create($conn, $conf);
    }

    public function getManager()
    {
        return $this->entityManager;
    }
}