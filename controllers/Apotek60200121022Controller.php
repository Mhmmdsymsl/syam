<?php

namespace app\controllers;
use app\models\Obat60200121022;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class Apotek60200121022Controller extends \yii\web\Controller
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

class Apotek60200121022 extends ActiveRecord
{
    public static function Obat6020012102200()
    {
        return 'Apiotek60200121022';
        
    }
}
