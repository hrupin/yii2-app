<?php
namespace common\models\entities\base;

use yii\web\Request;

class AppRequest extends Request
{

    public function setLanguageFromUrl()
    {
        $lang = $this->hostInfo;
        $lang = str_replace('https://', '', $lang);
        $lang = str_replace('http://', '', $lang);
        $lang = str_replace(\Yii::$app->params['frontendHostInfo'], '', $lang);
        $lang = str_replace(\Yii::$app->params['backendHostInfo'], '', $lang);
        $lang = str_replace(\Yii::$app->params['apiHostInfo'], '', $lang);
        $lang = str_replace('.', '', $lang);
        $lang_url = isset($lang) ? $lang : null;
        Languages::setCurrent($lang_url);
    }

    protected function resolveRequestUri()
    {
        $this->setLanguageFromUrl();
        return parent::resolveRequestUri();
    }

}