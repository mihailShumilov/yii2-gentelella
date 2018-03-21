<?php
/**
 * Created by PhpStorm.
 * User: godson
 * Date: 3/21/18
 * Time: 12:58
 */

namespace yiister\gentelella\assets;


use yii\web\AssetBundle;

class BowerExtensionAsset extends AssetBundle {
	public $sourcePath = '@bower/gentelella/vendors/';

	public $css = [
		'bootstrap-daterangepicker/daterangepicker.css'
	];
	public $js = [
		'bootstrap-daterangepicker/daterangepicker.js',
		'moment/min/moment-with-locales.min.js'
	];
}
