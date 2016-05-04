<?php


use yii\helpers\Html;
use yii\grid\GridView;

if (!Yii::$app->user->isGuest) {
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProveedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

	$this->title = 'Proveedores';
	$this->params['breadcrumbs'][] = $this->title;
	?>
	<div class="proveedores-index">

		<h1><?= Html::encode($this->title) ?></h1>
		<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

		<p>
		    <?= Html::a('Nuevo Proveedor', ['create'], ['class' => 'btn btn-success']) ?>
		</p>
		<?= GridView::widget([
		    'dataProvider' => $dataProvider,
		    'filterModel' => $searchModel,
		    'columns' => [
		        ['class' => 'yii\grid\SerialColumn'],

		        'id',
		        'identificacion',
		        'nombre',
		        'direccion',
		        'telefono',
		        // 'cuil',
		        // 'codigo_banco',
		        // 'cbu',
		        // 'idposicioniva',
		        // 'email:email',
		        // 'actividad',
		        // 'observaciones',

		        ['class' => 'yii\grid\ActionColumn'],
		    ],
		]); ?>
	</div>
<?php
};
?>

