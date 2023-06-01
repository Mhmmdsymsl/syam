<?php

use yii\db\Migration;

/**
 * Class m230529_173258_mahasiswa
 */
class m230529_173258_mahasiswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("mahasiswa",[
            "id" => $this->primaryKey(10),
            "nim" => $this->string(30),
            "nama" => $this->string(50),
            "kelas" => $this->string(20),
        ]);

        $this->insert('mahasiswa', [
            'id' => 1,
            'nim' => 60200121022,
            'nama' => 'muhammad syamsul',
            'kelas' => 'D',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('mahasiswa', ['id' => 1]);
        $this->dropTable('{{%mahasiswa}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230529_173258_mahasiswa cannot be reverted.\n";

        return false;
    }
    */
}
