<?php
namespace  api\modules\v1\models;

use yii\base\Model;

class AnswerAPI extends Model
{
    private static $arrErrors = [
        200 => [
            'text' => 'OK',
            'code' => 1000
        ],
        'AUTH_NotGetFromPostPhone' => [
            'text' => 'AUTH => Not Get Phone',
            'code' => 1001
        ],
        'AUTH_NotGetFromPostCode' => [
            'text' => 'AUTH => Not Get Code',
            'code' => 1002
        ],
        'AUTH_NotExistUser' => [
            'text' => 'AUTH => Not Exist User',
            'code' => 1003
        ],
        'AUTH_ErrorCode' => [
            'text' => 'AUTH => Error Code',
            'code' => 1004
        ],
        'AUTH_NotGetToken' => [
            'text' => 'AUTH => Not Get Token',
            'code' => 1005
        ],
        'AUTH_ErrorToken' => [
            'text' => 'AUTH => Error Token',
            'code' => 1005
        ]
    ];

    public static function getAnswer($a, $res = []){
        return $result = [
            'sys' => self::$arrErrors[$a],
            'detailed' => $res
        ];
    }
}