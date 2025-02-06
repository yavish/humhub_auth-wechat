<?php

namespace humhubContrib\auth\wechat\authclient;

use humhubContrib\auth\wechat\authclient\Wechat;
use yii\web\NotFoundHttpException;

/**
 * Wechat allows authentication via Wechat OAuth.
 */
class WechatAuth extends Wechat
{
  /**
     * @inheritdoc
     */
    protected function defaultViewOptions()
    {
  

		 return [
            'popupWidth' => 800,
            'popupHeight' => 500,
            'cssIcon' => 'fa fa-wechat',
	    #'buttonBackgroundColor' => '#395697',
	    'buttonBackgroundColor' => '#21A1B3',
        ];
    }


    /**
     * @inheritdoc
     */
 
    protected function defaultNormalizeUserAttributeMap()
    {

		return [
			//            'id' => 'openid',
		'id' => 'unionid', // 可以跨多个小程序， 公众号 ，网页引用
	    'firstname' => 'nickname',
	    'username' => 'nickname',
	   /* function( $attributes) {
		    return  strtok($attributes['openid'], '-');
	   },*/

			'email' => function ($attributes) {
                if (empty($attributes['email'])) {

					return $attributes['openid'].'@loumamam.cn'; 
                  // throw new NotFoundHttpException( 'Yes!.Please add a valid email address to your WeChat account to be able to proceed.');
                }
                return $attributes['email'];
            },
        ];

    }
}
