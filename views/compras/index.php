<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
if (!Yii::$app->user->isGuest) {
$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  // echo $this->render('_search', ['model' => $searchModel]); 


?>

    <p>
        <?= Html::a('Nueva Compra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         	[
			'attribute' => 'idproveedor',
			'value' => 'proveedores.identificacion',
			],

            'descripcion',
            'fecha_factura',
            'importe',
            'comprobante',
            'Haber',
            'Saldo',
            'cuentas.codigo',
            'pagado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 

?>



</div>
<?php
};
?>
