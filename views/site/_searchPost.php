<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="post-search" id="searchPostSmall">

    <?php $form = ActiveForm::begin([
        'action' => ['post-search'],
        'method' => 'get',
    ]); ?>

    <div>

        <input type="text" placeholder="Поиск по блогу" name="search" class="searchPostField">

        <div class="form-group" id="searchPostSmall">
            <?= Html::submitButton('Искать', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>


<div class="post-search" id="searchPostRow">

    <?php $form = ActiveForm::begin([
        'action' => ['post-search'],
        'method' => 'get',
    ]); ?>

    <div class="formInline">

        <div>
            <input type="text" placeholder="Поиск по блогу" name="search" class="searchPostFieldRow">
        </div>

        <div class="form-group">
            <?= Html::submitButton('Искать', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>