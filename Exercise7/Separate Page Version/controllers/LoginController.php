<?php

namespace app\controllers;

class LoginController extends \yii\web\Controller
{
    public function actionUserlogin()
    {
        $users = Users::model()->findAll();
        return $this->render('userlogin',array(
            'users'=>$users
        ));
        
    }

}
