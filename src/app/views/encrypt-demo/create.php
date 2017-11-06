<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EncryptDemo */

$this->title = 'Create Encrypt Demo';
$this->params['breadcrumbs'][] = ['label' => 'Encrypt Demos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encrypt-demo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
