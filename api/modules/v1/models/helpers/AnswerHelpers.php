<?php
namespace  api\modules\v1\models\helpers;


class AnswerHelpers
{
    private $errors = [
    ];

    public function getAnswer($code){
        return $this->errors[$code];
    }
}