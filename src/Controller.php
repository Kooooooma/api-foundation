<?php

namespace EasemobTickets;

use EasemobTickets\Service\Doctrine;
use Symfony\Component\Yaml\Yaml;


class Controller
{
    public function __construct()
    {

    }

    public function getDoctrine()
    {
        static $doctrine = null;

        if ( $doctrine == null ) {
            $conf = Yaml::parse(file_get_contents(\CONF_DIR.'/config.yml'))['doctrine'];
            $conf['dbal']['path'] = str_replace('%model_path%', \MODEL_DIR, $conf['dbal']['path']);

            $doctrine = new Doctrine($conf['dbal']);
        }

        return $doctrine;
    }
}