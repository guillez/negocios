<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Proveedores;
use app\models\Cuentas;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idproveedor')->dropDownList(
		ArrayHelper::map(Proveedores::find()->all(),'id','identificacion' )

	) ?>


    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

   <?php echo $form->field($model,'fecha_factura')->
    widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-5:+0',
            'changeYear' => true]
    ]) ?>

    <?= $form->field($model, 'importe')->textInput() ?>


   <?php echo $form->field($model,'fecha_recepcion')->
    widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-5:+0',
            'changeYear' => true]
    ]) ?>
    <?= $form->field($model, 'comprobante')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'pagado')->radioList(array( 1 =>'Pagado', 0 =>'A Pagado')); ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idimputacion')->dropDownList(
		ArrayHelper::map(Cuentas::find()->all(),'id','descripcion' )

	) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
