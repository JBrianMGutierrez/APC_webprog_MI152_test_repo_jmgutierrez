<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Login ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forms-index">
	<div class="box">
		<h1>login/userlogin</h1>
		<?php
			foreach($users as $user)
			{
				echo "$users ->username";
			}
		?>
	</div>
</div>

