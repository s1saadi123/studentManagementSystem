<?php
use yii\helpers\Html;
use yii\grid\GridView;
  ?>


</p>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'rs_id',
        'studentsStd.std_name',

        'grade'

    //    ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
</div>
