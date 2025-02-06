<?php

use humhub\modules\user\authclient\Collection;

return [
    'id' => 'auth-wechat',
    'class' => 'humhubContrib\auth\wechat\Module',
    'namespace' => 'humhubContrib\auth\wechat',
    'events' => [
        [Collection::class, Collection::EVENT_AFTER_CLIENTS_SET, ['humhubContrib\auth\wechat\Events', 'onAuthClientCollectionInit']]
    ],
];
