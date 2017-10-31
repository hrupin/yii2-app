<?php

namespace common\models\entities\base;

use common\models\forms\base\Settings as SettingsForm;

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
    const SETTINGS_ACTS_FRONTEND = 1;
    const SETTINGS_ACTS_BACKEND = 2;
    const SETTINGS_ACTS_API = 3;
    const SETTINGS_ACTS_CONSOLE = 4;

    public function getSetting(){
        return unserialize($this->getAttribute('settings'));
    }

    public function setSetting($value){
        if(is_array($value)){
            $this->setAttribute('settings', serialize($value));
        }
        $this->setAttribute('settings', serialize([]));
    }

}