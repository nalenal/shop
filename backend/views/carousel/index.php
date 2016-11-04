<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carousels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carousel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'imagename',
            'description',
            'title',
            'is_active',
            // 'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
