<?php

namespace app\controllers;

use app\models\NewsForm;
use Yii;
use yii\web\Controller;


class NewsController extends Controller
{


    public function actionShow()
    {

        $new = '';
        $ne = '';


        $model = new NewsForm();

        return $this->render('Show',
            [
                'new' => $new,
                'ne' => $ne,
                'model' => $model,
            ]

        );
    }
}