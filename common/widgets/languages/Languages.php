<?php
namespace common\widgets\languages;

use common\models\entities\base\Languages as EntitiesLanguages;

class Languages extends \yii\bootstrap\Widget
{

    private $url;

    public function run() {
        $this->url = \Yii::$app->request->hostInfo;
        $this->url = explode('//', $this->url);
        $this->url[0] .= '//';
        $this->url[1] = str_replace(EntitiesLanguages::searchLangByUrl($this->url[1]), '', $this->url[1]);

        return $this->render('languages', [
            'current' => EntitiesLanguages::getCurrent(),
            'langs' => $this->getLangs()
        ]);
    }

    private function getLangs(){
        $langs = [];
        foreach (EntitiesLanguages::find()
                     ->where('id != :current_id', [
                         ':current_id' => EntitiesLanguages::getCurrent()->id
                     ])
                     ->all() as $item) {
            $langs[] = [
                'label' => $item->name,
                'url' => $this->url[0].$item->url.'.'.$this->url[1].'/'.\YII::$app->request->pathInfo
            ];
        }
        return $langs;
    }

}