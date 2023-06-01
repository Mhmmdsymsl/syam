<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa022".
 *
 * @property int $id
 * @property string|null $nim
 * @property string|null $nama
 * @property string|null $kelas
 * @property string|null $status
 */
class Mahasiswa022 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa022';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'status'], 'required'],
            [['nim', 'nama', 'kelas', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'status' => 'Status',
        ];
    }
}
