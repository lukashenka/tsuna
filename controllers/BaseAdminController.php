<?php
/**
 * Created by PhpStorm.
 * User: karachun
 * Date: 5/3/16
 * Time: 3:09 PM
 */

namespace app\controllers;
use yii\web\Controller;
use yii\filters\VerbFilter;

class BaseAdminController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'basicAuth' => [
                'class' => \yii\filters\auth\HttpBasicAuth::className(),
                'auth' => function ($username, $password) {
                    return $username == "tsuna" && $password == "tsuna";
                }
            ],
        ];
    }
}