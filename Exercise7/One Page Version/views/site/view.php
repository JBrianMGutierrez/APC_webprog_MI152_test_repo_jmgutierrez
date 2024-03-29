<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\formsModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Forms Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
<div class="forms-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?php
			if (Yii::$app->user->isGuest)
			{
				
			} 
			elseif(Yii::$app->user->identity->username)
			{
				echo Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
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
            'name',
            'nickname',
            'email:email',
            'home_address',
            'comment',
            'gender',
            'cellphone',
        ],
    ]) ?>
</div>
</div>
