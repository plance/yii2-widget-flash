<?php
namespace plance\widget;

use Yii;
use yii\helpers\Url;

class Flash extends yii\base\Widget
{
    public function run()
    {
		return $this -> render('flash');
    }
	
	/**
	 * Set flash message
	 * @param string $url
	 * @param string $value
	 * @param bool $key
	 * @return mixed
	 */
	public static function set($url, $value, $key = true)
	{
		Yii::$app -> session -> setFlash(
			$key == true ? 'success' : 'wrong', 
			$value
		);
		
		if($url == true)
		{
			return Yii::$app -> getResponse() -> redirect(Url::to($url), 302);
		}
		return Yii::$app -> getResponse() -> redirect(Yii::$app -> getRequest() -> getUrl());
	}
}