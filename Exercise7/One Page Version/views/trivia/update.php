<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TriviasModel */

$this->title = 'Update Trivias Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trivias Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trivias-model-update">
	<div class="box">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
