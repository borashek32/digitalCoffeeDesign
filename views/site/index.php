<?php
$this->title = 'Digital coffee design';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
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
                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                    ]) ?>
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="cardPromo">
                        <h2 class="cardTitle">
                            Сайт-визитка
                        </h2>
                        <p class="text-md-start">Одностраничный информационный сайт содержит:</p>
                        <ul style="margin-left: 20px">
                            <li>рекламный контент (услуги, цены)</li>
                            <li>контакты</li>
                            <li>форма обратной связи</li>
                            <li>форма отправки комментариев/отзывов</li>
                        </ul>
                        <h4>Цена: от $50</h4>
                        <h5>Примеры моих работ:</h5>
                        <a href="http://hola-ingles.com/">¡Hola Inglés! &raquo;</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cardPromo">
                        <h2 class="cardTitle">
                            Блог
                        </h2>
                        <p class="text-md-start">Сайт с динамически-изменяемым контентом содержит:</p>
                        <ul style="margin-left: 20px">
                            <li>полноценную интуитивно понятную панель администратора</li>
                            <li>рекланый контент (услуги, цены)</li>
                            <li>форма обратной связи</li>
                            <li>комментарии к каждому посту</li>
                        </ul>
                        <h4>Цена: от $100</h4>
                        <h5>Примеры моих работ:</h5>
                        <a href="http://lemma-auto.ru/">ЛеммаАвто</a><br>
                        <a href="http://digitalcoffeedesign.com/">Digital coffee design</a><br>
                        <a href="https://sntnara.ru/">СНТ Нара</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cardPromo">
                        <h2 class="cardTitle">
                            Фирменный стиль
                        </h2>
                        <p class="text-md-start">Дизайнерские рещения:</p>
                        <ul style="margin-left: 20px">
                            <li>выбор фирменного цвета</li>
                            <li>подбор фотографий</li>
                            <li>разработка логотипа компании</li>
                        </ul>
                        <h4>Цена: от $50</h4>
                        <p>Фирменный стиль на всех сделанных мною сайтах разрабатывался также мною).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>