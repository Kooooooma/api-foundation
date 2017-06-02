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
        $config  = Yaml::parse(file_get_contents(\CONF_PATH.'/'.$configFile))[$configKey]['dbal'];
        $devMode = false;

        if ( isset($config['devmode']) ) {
            $devMode = $config['devmode'];
            unset($config['devmode']);
        }

        $conf = Setup::createAnnotationMetadataConfiguration(array(MODEL_PATH), $devMode);

        $conn = array();
        foreach ( $config as $key => $val ) {
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
        return $this->entityManager->getRepository('\\'.APP_NAMESPACE.'\Model\\'.$class);
    }
}