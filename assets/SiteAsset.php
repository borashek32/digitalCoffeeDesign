<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class SiteAsset
 * @package app\assets
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-grid.min.css',
        'css/blog.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.validate.min.js',
        'js/jquery.maskedinput.min.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\AppAsset',
    ];
}
