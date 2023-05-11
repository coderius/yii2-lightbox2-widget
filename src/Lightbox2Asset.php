<?php

namespace crestoff\lightbox2;

use Yii;
use yii\web\AssetBundle;

class Lightbox2Asset extends AssetBundle
{
    public $sourcePath = '@bower/lightbox2/dist';
    
    public $js = [];
    public $css = [];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function init()
    {
        parent::init();
        
        $this->js[] = YII_DEBUG ? 'js/lightbox.js' : 'js/lightbox.min.js';
        $this->css[] = YII_DEBUG ? 'css/lightbox.css' : 'js/lightbox.min.css';
    }
}
