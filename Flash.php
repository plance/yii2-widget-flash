<?php
namespace plance\widget;

use Yii;
use yii\helpers\Url;

class Flash extends \yii\base\Widget
{
	public $template_success =	'<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									{text}
								</div>';
	public $template_wrong =	'<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									{text}
								</div>';
	
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