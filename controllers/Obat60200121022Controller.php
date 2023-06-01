<?php

namespace app\controllers;
use app\models\Obat60200121022;
use yii\data\ActiveDataProvider;


class Obat60200121022Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat60200121022::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}


