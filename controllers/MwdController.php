<?php

namespace app\controllers;

class MwdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCountdown()
    {
        return $this->render('countdown');
    }

}
