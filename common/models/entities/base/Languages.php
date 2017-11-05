<?php

namespace common\models\entities\base;

use Yii;
use common\models\forms\base\LanguagesForm;

class Languages extends LanguagesForm
{

    static $current = null;

    /**
     * Получение текущего объекта языка
     * @return null
     */
    static function getCurrent()
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    /**
     * Установка текущего объекта языка и локаль пользователя
     * @param null $url
     */
    static function setCurrent($url = null)
    {
        $language = self::getLangByUrl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->local;
    }

    /**
     * Получения объекта языка по умолчанию
     * @return mixed
     */
    static function getDefaultLang()
    {
        return self::find()->where('`default` = :default', [':default' => 1])->one();
    }

    /**
     * Получения объекта языка по буквенному идентификатору
     * @param null $url
     * @return null
     */
    static function getLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = self::find()->where('url = :url', [':url' => $url])->one();
            if ( $language === null ) {
                return null;
            }else{
                return $language;
            }
        }
    }

    /**
     * Поиск языка в урл
     * @param null $url
     * @return null
     */
    static function searchLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        }
        $searchData = explode('.', $url);
        $language = false;
        foreach ($searchData as $searchDatum) {
            if(!$language){
                $language = self::find()->where('url = :url', [':url' => $searchDatum])->one();
            }
        }
        if (!$language) {
            return null;
        }
        return $language->url.'.';
    }
}