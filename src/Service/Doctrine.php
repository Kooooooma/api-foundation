<?php

namespace ApiFoundation\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\Yaml\Yaml;

class Doctrine
{
    private $entityManager = null;

    public function __construct($configFile, $configKey)
    {
        $config = Yaml::parse(file_get_contents(\CONF_DIR.'/'.$configFile))[$configKey]['dbal'];
        $config['path'] = str_replace('%model_path%', \MODEL_DIR, $config['path']);

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

    public function getRepository($class)
    {
        return $this->entityManager->getRepository('ApiFoundation\Model\\'.$class);
    }
}