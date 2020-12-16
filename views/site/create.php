<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Оставить отзыв';

?>

<div class="aboutUs">
    <div class="overlayAboutUs">
        <div class="container">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'date')->textInput(['readonly' => true, 'value' => date('Y-m-d')])->label('Дата') ?>

            <?= $form->field($model, 'name')->textarea(['rows' => 1])->label('Имя') ?>

            <?= $form->field($model, 'review')->textarea(['rows' => 6])->label('Отзыв') ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
