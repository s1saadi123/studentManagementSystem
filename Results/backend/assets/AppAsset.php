<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'css/morris.css',
        'css/font-awsome.min.css',
        'css/ionicons.min.css',
        'css/blue.css',
        'css/site.css',
        'css/datepicker3.css',
        'css/daterangepicker.css',
        'css/bootstrap3-wysihtml5.min.css',
        'css/jquery-jvectormap-1.2.2.css'

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
