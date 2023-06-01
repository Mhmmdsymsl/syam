<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa022}}`.
 */
class m230531_141856_create_mahasiswa022_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("mahasiswa022",[
            "id" => $this->primaryKey(10),
            "nim" => $this->string(30),
            "nama" => $this->string(50),
            "kelas" => $this->string(20),
            "status" => $this->string(),
        ]);

        $this->insert('mahasiswa022', [
            'id' => 1,
            'nim' => 60200121022,
            'nama' => 'muhammad syamsul',
            'kelas' => 'D',
            'status' => 'Baru',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa022}}');
    }
}
