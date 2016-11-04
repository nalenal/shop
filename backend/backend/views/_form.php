<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Carousel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carousel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imagename')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
