<?php

/* @var $this yii\web\View */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use app\assets;
use yii\Models\Category;
use yii\bootstrap\ActiveForm;

?>

<div class="blog">
    <div class="overlayBlog">
        <div class="container">
            <div class="rowBlog">

                <div class="leftPart">
                    <img src="../img/dcd.png" class="coffeePic">


                    <div class="menuLeftColumn">
                        <div class="menuLeft"><?= $this->render('_menu_left', compact('categories', 'model')) ?></div>
                    </div>

                    <div class="text-left">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                            <p class="nav justify-content-center">Напишите мне</p>
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

                                    <?= $form->field($model, 'name')->textInput()->label('Имя', ['class' => 'textForm']) ?>

                                    <?= $form->field($model, 'email')->textInput()->label('Email', ['class' => 'textForm']) ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 2])->label('Сообщение', ['class' => 'textForm']) ?>
                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                    ]) ?>
                                    <div class="form-group">
                                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-danger', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>

                                <canvas id="myCanvas" height="200" width="800"></canvas>
                            </div>
                        </div>
                    </div>


                    <div class="search">
                        <?= $this->render('_searchPost') ?>
                    </div>
                </div>

                <div class="middlePart">

                    <h1 class="hat">Digital coffee design</h1>

                    <div class="menuRow" id="searchPostRow">
                        <div class="menuLeftRow"><?= $this->render('_menu_left', compact('categories', 'model')) ?></div>
                    </div>

                    <div class="searchRow" id="searchPostRow">
                        <?= $this->render('_searchPost') ?>
                    </div>

                    <div class="note">

                        <div class="titleNote">

                            <h3><a href="<?= \yii\helpers\Url::to(['site/post', 'id' => $post->id]) ?>"><?= $post->title ?></a></h3>

                            <?= \yii\helpers\Html::img( ($post->img), ['class' => 'imgPost']) ?>

                        </div>

                        <h4><span><?= Yii::$app->formatter->asDate($post->date) ?></span></h4>

                        <h4>Categoría: <a href="<?= \yii\helpers\Url::to(['site/category', 'id' => $post->category_id]) ?>"><?= $post->category->name ?></a></h4>

                        <?= Html::tag('p', Html::encode($post->text), ['class' => 'footerText']) ?>

                    </div>
                </div>

                <div class="rightPart">

                </div>
            </div>
        </div>
