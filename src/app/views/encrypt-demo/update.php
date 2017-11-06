<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncryptDemo */

$this->title = 'Update Encrypt Demo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Encrypt Demos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encrypt-demo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
