<?php

namespace app\controllers;

use app\models\Mahasiswa022;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa022Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa022::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);

    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa022;
        $mhs->nim = '60200121022';
        $mhs->nama = 'muhamad syamsul';
        $mhs->kelas = 'D';
        $mhs->status = 'baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }

    }

    public function actionUpdate($id)
    {
        $mhs =Mahasiswa022::findOne(['id' => $id]);
        if ($mhs !== null){
            $mhs->kelas = 'D';
            $mhs->status ='Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa022::findOne(['id' => $id]);
        if ($mhs->delete()){
            Yii::$app->session->setFlash('danger', 'Data terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
    
        $mhs = Mahasiswa022::findOne($id);
        return $this->render('view',['mhs' => $mhs]);
    }
}