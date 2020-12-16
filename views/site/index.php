<?php

/* @var $this yii\web\View */

$this->title = 'Digital coffee design';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

    <div class="promo">
        <div class="overlayPromo">
            <div class="container">
                <div class="nav justify-content-center">
                    <h1 class="title">Digital coffee design</h1>
                    <p class="lead">Я создаю лучшее для вас</p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <p class="nav justify-content-center">Отправьте мне заявку</p>
                    </button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="height: 450px">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">Отправьте мне заявку:)</h5>
                            </div>

                            <div style="font-size: 14px">

                                <div class="modal-body">

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

                            <canvas id="myCanvas" height="200" width="800"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>