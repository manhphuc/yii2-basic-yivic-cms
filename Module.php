<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 7/29/16 3:28 PM
 */
namespace yivic\yivicCms;

use yii\base\BootstrapInterface;

defined('NP_TEXT_CATE') or define('NP_TEXT_CATE', 'yivic');

class Module extends \yii\base\Module implements BootstrapInterface
{
	public function init()
	{
		parent::init();

		// initialize the module with the configuration loaded from config.php
		\Yii::configure($this, require(__DIR__ . '/config.php'));
	}

	public function bootstrap($app)
	{
		if ($app instanceof \yii\console\Application) {
			$this->controllerNamespace = 'yivic\yivicCms\commands';
		}
	}
}