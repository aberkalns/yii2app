<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Room;


class RoomsController extends Controller
{
    public function actionCreate()
    {
        $model = new Room();
        $modelSaved = false;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $modelSaved = true;
        }
        
        return $this->render('create', [
            'model' => $model,
            'modelSaved' => $modelSaved
        ]);
    }
}