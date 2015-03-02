<?php


namespace spevv\flipclock;

use yii\web\AssetBundle;

class FlipclockAsset extends AssetBundle
{
    public $sourcePath = '@vendor/spevv/yii2-flipclock/assets'; 
	

	 public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->css[] = '/flipclock.css';
        $this->js[] = '/flipclock.min.js';
    }
} 
