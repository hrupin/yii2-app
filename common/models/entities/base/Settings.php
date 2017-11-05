<?php

namespace common\models\entities\base;

use Yii;
use yii\helpers\BaseFileHelper;
use common\models\forms\base\SettingsForm as SettingsForm;

class Settings extends SettingsForm{

    /**
     * constants types settings
     */
    const SETTINGS_TYPE_MODULE = 1;
    const SETTINGS_TYPE_COMPONENTS = 2;
    const SETTINGS_TYPE_PARAMS = 3;

    /**
     * constants acts settings
     */
    const SETTINGS_ACTS_COMMON = 1;
    const SETTINGS_ACTS_FRONTEND = 2;
    const SETTINGS_ACTS_BACKEND = 3;
    const SETTINGS_ACTS_API = 4;
    const SETTINGS_ACTS_CONSOLE = 5;

    public function getSetting(){
        return unserialize($this->getAttribute('settings'));
    }

    public function setSetting($value){
        if(is_array($value)){
            $this->setAttribute('settings', serialize($value));
        }
        $this->setAttribute('settings', serialize([]));
    }

    public static function getListModules(){
        $res = [];
        $listDir = scandir(Yii::getAlias('@modules'));
        foreach ($listDir as $dir){
            if (is_dir(Yii::getAlias('@modules').'/'.$dir) && $dir != '.' && $dir != '..') {
                $res[] = $dir;
            }
        }
        return $res;
    }

}