<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TriviasModel */

$this->title = 'Create Trivias Model';
$this->params['breadcrumbs'][] = ['label' => 'Trivias Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivias-model-create">
<div class="box">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
