<?php

namespace crestoff\lightbox2;

use yii\base\Widget;
use yii\helpers\Json;

class Lightbox2 extends Widget
{
    public $clientOptions = [];
    
    public function init()
    {
        parent::init();       
    } 
    
    public function run()
    {
        $plugin = $this->makePlugin('lightbox');
        $this->registerAssets($plugin);       
    }
    
    protected function makePlugin($name)
    {
        $js = false;
        
        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
            $js = "$name.option($options);";
            
        }
            
        return $js;
    }

    protected function registerAssets($plugin){
        $view = $this->getView();
        $bundle = Lightbox2Asset::register($view);
        $view->registerJs($plugin);
    }
}
