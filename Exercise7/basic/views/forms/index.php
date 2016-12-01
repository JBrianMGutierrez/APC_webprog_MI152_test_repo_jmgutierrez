
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Create Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forms-index">
	<div class="box">
		<h1>Form Section</h1>
		<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		<p>
			<?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo Html::a('Create a Trivia', ['create'], ['class' => 'btn btn-success']); 
			}
			?>
		</p>
		<?= GridView::widget
		([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => 
			[
				['class' => 'yii\grid\SerialColumn'],
				'name',
				'nickname',
				'email:email',
				//'id',
				//'home_address',
				//'gender',	
				// 'cellphone',
				// 'comment',
				['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
			],

		]); ?>
	</div>
</div>
