<?php


namespace app\assets;
use \yii\web\AssetBundle;
use yii\bootstrap\BootstrapAsset;
use yii\web\YiiAsset;
use \yii\web\View;

/**
 * Class BuidjeeAsset
 * @package app\assets
 */

class BuidjeeAsset extends AssetBundle
{
    public $basePath = '@webroot/buidjee';
    public $baseUrl = '@web/buidjee';

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];

    public $css = [
        'style/style.css',
        'style/custom.css',
    ];
    public $js = [
        'script/script.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

}