<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\widgets\Alert;


$this->title = 'Контакты';

?>
<div class="contacts zoom">
    <div class="overlayContacts">
        <div class="container">

            <div class="col-xl-6 offset-xl-3 col-xl-6 offset-lg-3 col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-6 offset-3">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= Alert::widget() ?>

                <h3>Наталья</h3>
                <h4><a href="tel:+79169174630" class='footerText'>+7 916 917 4630</a></h4>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Сообщение') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-danger', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
