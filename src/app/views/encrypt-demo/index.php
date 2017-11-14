<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncryptDemoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encrypt Demos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encrypt-demo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Encrypt Demo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dateField',
            'stringField',
            'integerField',
            'floatField',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
