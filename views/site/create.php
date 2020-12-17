<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

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

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
