<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\formsModel */

$this->title = 'Create Forms Model';
$this->params['breadcrumbs'][] = ['label' => 'Forms Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
<div class="forms-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>