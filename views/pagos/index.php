<?php

use yii\helpers\Html;
use yii\grid\GridView;

if (!Yii::$app->user->isGuest) {
/* @var $this yii\web\View */
/* @var $searchModel app\models\PagosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Pago', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idcompra',
            'descripcion',
            'fecha_pago',
            'importe',
            // 'comprobante',
            // 'pagado',
            // 'modo_pago',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
<?php 
};
?>
