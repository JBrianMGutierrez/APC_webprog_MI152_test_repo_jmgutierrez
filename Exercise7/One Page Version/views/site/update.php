<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\formsModel */

$this->title = "Form #" . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Forms Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="box">
<div class="forms-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
