<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */
/* @var $form ActiveForm */
?>
<div class="compras">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idproveedor') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'idimputacion') ?>
        <?= $form->field($model, 'pagado') ?>
        <?= $form->field($model, 'fecha_factura') ?>
        <?= $form->field($model, 'fecha_recepcion') ?>
        <?= $form->field($model, 'importe') ?>
        <?= $form->field($model, 'observaciones') ?>
        <?= $form->field($model, 'comprobante') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- compras -->
