<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Compras;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pagos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagos-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'idcompra')->dropDownList(
		ArrayHelper::map(Compras::find()->all(),'id','comprobante' )

	) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

   <?php echo $form->field($model,'fecha_pago')->
    widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-5:+0',
            'changeYear' => true]
    ]) ?>

    <?= $form->field($model, 'importe')->textInput() ?>

    <?= $form->field($model, 'comprobante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pagado')->radioList(array( 1 =>'Pagado', 0 =>'A Pagado')); ?>

 <?= $form->field($model, 'modo_pago')->radioList(array( '1'=>'Contado',2 => 'Transferencia', 3=> 'Cheque')); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
