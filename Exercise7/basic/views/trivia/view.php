<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TriviasModel */

$this->title = "Question";
$this->params['breadcrumbs'][] = ['label' => 'Trivias Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivias-model-view">
<div class="box">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?php
			if (Yii::$app->user->isGuest)
			{
				
			} 
			elseif(Yii::$app->user->identity->username)
			{
				echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
				echo Html::a('Delete', ['delete', 'id' => $model->id], 
				[
					'class' => 'btn btn-danger',
					'data' => 
					[
						'confirm' => 'Are you sure you want to delete this item?',
						'method' => 'post',
					],
				]);
			}
		?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'question',
            'answer',
        ],
    ]) ?>
</div>
</div>
