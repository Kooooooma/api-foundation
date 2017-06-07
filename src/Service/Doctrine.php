<?php

namespace ApiFoundation\Service;

use ApiFoundation\Listener\TablePrefix;
use Doctrine\Common\EventManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Events;
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

        if ( isset($config['prefix']) ) {
            $prefix = $config['prefix'];
            unset($config['prefix']);
        }

        $conf = Setup::createAnnotationMetadataConfiguration(array(MODEL_PATH), $devMode);

        $conn = array();
        foreach ( $config as $key => $val ) {
            $conn[$key] = $val;
        }

        //set table prefix by event listener
        $evm    = new EventManager();
        $prefix = new TablePrefix($prefix);
        $evm->addEventListener(Events::loadClassMetadata, $prefix);

        $this->entityManager = EntityManager::create($conn, $conf, $evm);
    }

    public function getManager()
    {
        return $this->entityManager;
    }

    public function getRepository($class)
    {
        return $this->entityManager->getRepository('\\'.APP_NAMESPACE.'\Model\\'.$class);
    }

    public function find($class, $id)
    {
        return $this->entityManager->find('\\'.APP_NAMESPACE.'\Model\\'.$class, $id);
    }
}