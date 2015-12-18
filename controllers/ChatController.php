<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ValidarFormulario;
use app\models\ValidarFormularioAjax;
use app\models\Online;
use yii\widgets\ActiveForm;
use yii\web\Response;
use app\models\FormRegister;
use app\models\Users;
use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Session;
use app\models\FormRecoverPass;
use app\models\FormResetPass;

class ChatController extends Controller{   

    public function actionIndex(){
        $table = new Online;
        $model = $table->find()->all();
        return $this->render("index", ['model' => $model]);
    }

}
