<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MyForm_Model */

$this->title = 'Create My Form  Model';
$this->params['breadcrumbs'][] = ['label' => 'My Form  Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-form--model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
