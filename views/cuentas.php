<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuentas */
/* @var $form ActiveForm */
?>
<div class="cuentas">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'codigo') ?>
        <?= $form->field($model, 'descripcion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- cuentas -->
