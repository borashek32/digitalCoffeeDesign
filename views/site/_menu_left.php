<?php

use \yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>

<ul class="categories">

    <?php foreach ($categories as $category): ?>

        <?= Html::a($category->name, ['site/category', 'id' => $category->id]) ?>

    <?php endforeach; ?>

</ul>