<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_60200121022".
 *
 * @property int $id
 * @property int $kode_obat
 * @property int $harga
 * @property int $stok_obat
 */
class Obat60200121022 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_60200121022';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_obat', 'harga', 'stok_obat'], 'required'],
            [['id', 'kode_obat', 'harga', 'stok_obat'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
}