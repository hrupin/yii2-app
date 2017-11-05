<?php
namespace backend\models\services\base;

use common\models\entities\base\Settings;

class SettingsService extends Settings
{
    public static function getAllModules(){
        $modules = [];
        foreach (Settings::getListModules() as $key=>$item) {
            if(Settings::find()->where(['name' => $item])->limit(1)->one()){
                $modules[] = [
                    'name' => Settings::find()->where(['name' => $item])->limit(1)->one(),
                    'status' =>'installed'
                ];
            }
            else{
                $modules[] = [
                    'name' => $item,
                    'status' =>'not installed'
                ];
            }
        };
        return $modules;
    }

}