<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\widgets\Alert;

$this->title = 'Обо мне';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="aboutUs">
    <div class="overlayAboutUs">
        <div class="container">
            <div class="spaceLeft">

                <h1 class="titleAboutUs"><?= Html::encode($this->title) ?></h1>

                <p>
                    Меня зовут Наталья. Я занимаюсь веб-разработкой. И мне это очень нравится, а ещё больше нравятся ставить перед собой новые невыполнимые задачи! С каждым запущенным в работу сайтом я выхожу на новый уровень знаний и возможностей. Сталкиваясь с уже знакомыми проблемами, я выбираю новые пути решения, тем самым расширяя свои наработки.
                    Помимо невидимого функционала сайта я подбираю дизайн, проектирую логотипы, работаю с фирменным стилем.<br>
                    Прежде чем взять проект в работу все детали подробно обсуждаются. Я вникаю в техническое задание, если таковое имеется. После мы обговариваем сроки и цену. В процессе работы необходимо тесное взаимодействие с клиентом. То есть от вас желательно всегда быть на связи:)
                </p>
            </div>

            <div class="leftAlign">
                <ul>
                    <h4>На данный момент мои знания - это:</h4>
                    <li>язык программирования PHP,</li>
                    <li>фреймворк PHP Laravel 8,</li>
                    <li>фреймворк PHP Yii2,</li>
                    <li>язык программирования JavaScript,</li>
                    <li>язык гипертекстовой разметки Html,</li>
                    <li>каскадные таблицы стилей CSS и их препроцессоры,</li>
                    <li>базы данных MySql,</li>
                    <li>среда выполнения языка JavaScript - Node.js,</li>
                    <li>фполнофункциональный фреймворк для Laravel - Livewire,</li>
                    <li>фреймворк Tailvind CSS,</li>
                    <li>платформа для создания адаптивных сайтов Bootstrap,</li>
                    <li>различные пакеты для Laravel.</li>
                </ul>
            </div>

            <div class="text-right" style="margin-top: 30px">
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

                        <canvas id="myCanvas" height="200" width="800"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
