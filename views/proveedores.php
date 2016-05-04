<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form ActiveForm */
?>
<div class="proveedores">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'identificacion') ?>
        <?= $form->field($model, 'cuil') ?>
        <?= $form->field($model, 'idposicioniva') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'codigo_banco') ?>
        <?= $form->field($model, 'cbu') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'actividad') ?>
        <?= $form->field($model, 'observaciones') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- proveedores -->
