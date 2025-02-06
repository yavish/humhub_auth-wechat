<?php

namespace humhubContrib\auth\wechat\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhubContrib\auth\wechat\models\ConfigureForm;

/**
 * Module configuation
 */
class AdminController extends Controller
{

    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = ConfigureForm::getInstance();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->saveSettings()) {
            $this->view->saved();
        }

        return $this->render('index', ['model' => $model]);
    }

}
