<?php


namespace maks757\flipclock;

use yii\web\AssetBundle;

class FlipclockAsset extends AssetBundle
{
    public $sourcePath = '@vendor/maks757/yii2-flipclock/assets'; 
	

	 public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->css[] = '/flipclock.css';
        $this->js[] = '/flipclock.min.js';
    }
} 
