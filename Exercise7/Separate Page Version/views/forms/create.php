<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Forms */

$this->title = 'Create Forms';
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forms-create">
	<div class="box">
		<h1><?= Html::encode($this->title) ?></h1>
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>
