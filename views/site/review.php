<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\widgets\Alert;

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="review">
    <div class="overlayReview">
        <div class="container">
            <div class="spaceLeft">
                <h1 class="titleAboutUs">Оставьте свой отзыв здесь</h1>

                <div class="spaceReview">
                    <?= Html::a('Написать отзыв', ['create'], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <div class="row">
                <?php foreach ($reviews as $review): ?>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="reviewBg">

                            <h4><span><?= Yii::$app->formatter->asDate($review->date) ?></span></h4>

                            <?= Html::tag('p', Html::encode($review->name), ['class' => 'footerText']) ?>

                            <?= Html::tag('p', Html::encode($review->review), ['class' => 'footerText']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center">
                <nav aria-label="...">
                    <?= \yii\widgets\LinkPager::widget([
                        'pagination' => $pages
                    ])?>
                </nav>
            </div>
        </div>
    </div>
</div>
