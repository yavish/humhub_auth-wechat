<?php

namespace humhubContrib\auth\wechat;

use humhub\components\Event;
use humhub\modules\user\authclient\Collection;
use humhubContrib\auth\wechat\authclient\WechatAuth;
use humhubContrib\auth\wechat\models\ConfigureForm;

class Events
{
    /**
     * @param Event $event
     */
    public static function onAuthClientCollectionInit($event)
    {
        /** @var Collection $authClientCollection */
        $authClientCollection = $event->sender;

        if (!empty(ConfigureForm::getInstance()->enabled)) {
            $authClientCollection->setClient('wechat', [
                'class' => WechatAuth::class,
                'clientId' => ConfigureForm::getInstance()->clientId,
                'clientSecret' => ConfigureForm::getInstance()->clientSecret
            ]);
        }
    }

}
