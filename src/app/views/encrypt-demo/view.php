<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EncryptDemo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Encrypt Demos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encrypt-demo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_field_encrypt:ntext',
            'string_field_encrypt:ntext',
            'integer_field_encrypt:ntext',
            'float_field_encrypt:ntext',
        ],
    ]) ?>

</div>
