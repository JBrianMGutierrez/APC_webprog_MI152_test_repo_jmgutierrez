<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyForm_Model */

$this->title = 'Update My Form  Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'My Form  Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-form--model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
