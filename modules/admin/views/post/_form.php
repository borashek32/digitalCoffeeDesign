<?php

use yii\widgets\ActiveForm;
use \app\models\Category;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'title')->textInput(['class' => 'form-control']) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'category_id')->dropDownList(Category::getListMap(), ['class' => 'form-control']) ?>
        </div>
    </div>

    <div class="col-sm-12">
        <?= $form->field($model, 'quote')->textInput(['class' => 'form-control']) ?>
    </div>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'date')->textInput([
                'type' => 'date',
                'class' => 'form-control'
            ]) ?>
        </div>
    </div>

    <?= $form->field($model, 'img')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
