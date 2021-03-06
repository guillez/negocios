<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idcompra') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha_pago') ?>

    <?= $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'comprobante') ?>

    <?php // echo $form->field($model, 'pagado') ?>

    <?php // echo $form->field($model, 'modo_pago') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
