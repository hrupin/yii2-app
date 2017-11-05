<?php
namespace modules\redsms\models\services;

use yii\web\HttpException;
use modules\redsms\models\entities\RedSms;

class RedSmsService extends RedSms
{
    public function balance()
    {
        $params = [
            'return' => $this->format,
        ];
        $url = $this->createUrl('balance', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function base()
    {
        $params = [
            'return' => $this->format,
        ];
        $url = $this->createUrl('base', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function senders()
    {
        $params = [
            'return' => $this->format,
        ];
        $url = $this->createUrl('senders', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function phones($idBase, $page = 0)
    {
        $params = [
            'base' => $idBase,
            'page' => $page,
            'return' => $this->format,
        ];
        $url = $this->createUrl('phones', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function getStatus($idSMS)
    {
        $idSMS = is_array($idSMS) ? implode(',', $idSMS) : $idSMS;
        $params = [
            'state' => $idSMS,
            'return' => $this->format,
        ];
        $url = $this->createUrl('status', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function sendSms($recipient, $text, $sender)
    {
        $tmp = false;
        if(is_array($recipient)){
            foreach ($recipient as $item) {
                if(!preg_match(self::REDSMS_REG, $item)){
                    $message = $this->handle(self::STATUS_INVALID_BATCH_RECIPIENT);
                    throw new HttpException(405, $message);
                }
            }
            if(count($recipient) > 50){
                $message = $this->handle(self::STATUS_OVER_50_PHONES);
                throw new HttpException(405, $message);
            }
            $tmp = implode(',', $recipient);
        }
        elseif(strpos($recipient, ',')){
            $ar = explode(',', $recipient);
            foreach ($ar as $item) {
                if(!preg_match(self::REDSMS_REG, $item)){
                    $message = $this->handle(self::STATUS_INVALID_STRING_RECIPIENT);
                    throw new HttpException(405, $message);
                }
            }
            if(count($ar) > 50){
                $message = $this->handle(self::STATUS_OVER_50_PHONES);
                throw new HttpException(405, $message);
            }
            $tmp = $recipient;
        }
        else{
            if(!preg_match(self::REDSMS_REG, $recipient)){
                $message = $this->handle(self::STATUS_INVALID_SINGLE_RECIPIENT);
                throw new HttpException(405, $message);
            }
            $tmp = $recipient;
        }
        return $this->processSms($tmp, $text, $sender);
    }

    public function findOnStop($phone)
    {
        if(!preg_match(self::REDSMS_REG, $phone)){
            $message = $this->handle(self::STATUS_NO_VALID_NUMBERS);
            throw new HttpException(405, $message);
        }
        $params = [
            'phone' => $phone,
            'return' => $this->format,
        ];
        $url = $this->createUrl('find_on_stop', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function addToStop($phone)
    {
        if(!preg_match(self::REDSMS_REG, $phone)){
            $message = $this->handle(self::STATUS_NO_VALID_NUMBERS);
            throw new HttpException(405, $message);
        }
        $params = [
            'phone' => $phone,
            'return' => $this->format,
        ];
        $url = $this->createUrl('add2stop', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }

    public function statByMonth($month)
    {
        $params = [
            'month' => $month,
            'return' => $this->format,
        ];
        $url = $this->createUrl('stat_by_month', $params);
        $response = $this->executeHttpQuery($url);
        return $this->humanizeResponse($response);
    }
}