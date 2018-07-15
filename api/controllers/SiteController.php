<?php
namespace api\controllers;

use common\models\User;
use Yii;
use api\models\LoginForm;
use yii\rest\Controller;


/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionIndex()
    {
        return 'api';
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        $model->load(Yii::$app->request->bodyParams, '');
        if ($token = $model->auth()) {
            return $token;
        } else {
            return $model;
        }
    }

    /**
     * @return array
     */
    protected function verbs()
    {
        return [
            'login' => ['post']
        ];
    }

}
