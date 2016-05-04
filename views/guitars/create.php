<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guitars */

$this->title = 'Create Guitars';
$this->params['breadcrumbs'][] = ['label' => 'Guitars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guitars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
