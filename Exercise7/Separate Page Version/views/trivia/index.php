<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TriviasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trivias Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivias-model-index">
<div class="box">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
		 <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo Html::a('Create a Trivia', ['create'], ['class' => 'btn btn-success']); 
			}
			?>
    </p>
<?php Pjax::begin(); ?>    
<?= GridView::widget
	([
        'dataProvider' => $dataProvider,
        'columns' => 
		[
            ['class' => 'yii\grid\SerialColumn'],

            'question',

			['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
</div>
