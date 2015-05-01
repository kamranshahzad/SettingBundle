<?php

namespace Kamran\SettingBundle\Base;

use Symfony\Component\Yaml\Yaml;



class DefaultSettings{

    const SETTING_INFO_FILE = 'application_info.yml';
    private $infoArray = array();

    public function __construct(){
        $appInfoFile = __DIR__.'../../Resources/config/'.self::SETTING_INFO_FILE;
        if(!file_exists($appInfoFile)){
            return;
        }
        $this->infoArray = Yaml::parse(file_get_contents($appInfoFile));
    }

    public function getApplicationDefaults(){
        return $this->infoArray;
    }

}


