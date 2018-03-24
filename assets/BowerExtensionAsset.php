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
		'bootstrap-daterangepicker/daterangepicker.css',
		'datatables.net-bs/css/dataTables.bootstrap.min.css',
		'jquery.tagsinput/src/jquery.tagsinput.css'
	];
	public $js = [
		'moment/min/moment-with-locales.min.js',
		'bootstrap-daterangepicker/daterangepicker.js',
		'datatables.net/js/jquery.dataTables.min.js',
		'datatables.net-bs/js/dataTables.bootstrap.min.js',
		'jquery.tagsinput/src/jquery.tagsinput.js'
	];
}
