<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layoutPath = 'app\modules\admin\views\layouts';
    public $layout = 'admin';

    public function init()
    {
        parent::init();
    }
}
