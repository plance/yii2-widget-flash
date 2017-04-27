<?php
$Session = Yii::$app -> session;

if($Session -> hasFlash('success')):
	echo strtr($this -> context -> template_success, [
		'{text}' => $Session -> getFlash('success')
	]);
elseif($Session -> hasFlash('wrong')):
	echo strtr($this -> context -> template_wrong, [
		'{text}' => $Session -> getFlash('wrong')
	]);
endif;