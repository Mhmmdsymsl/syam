<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'status',
        ],
    ]);
?>