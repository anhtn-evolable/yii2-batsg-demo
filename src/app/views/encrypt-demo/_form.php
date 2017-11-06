<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncryptDemo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encrypt-demo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_field_encrypt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'string_field_encrypt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'integer_field_encrypt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'float_field_encrypt')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
