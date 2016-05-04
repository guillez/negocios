<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pagos */
/* @var $form ActiveForm */
?>
<div class="pagos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idcompra') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'pagado') ?>
        <?= $form->field($model, 'fecha_pago') ?>
        <?= $form->field($model, 'importe') ?>
        <?= $form->field($model, 'modo_pago') ?>
        <?= $form->field($model, 'comprobante') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pagos -->
