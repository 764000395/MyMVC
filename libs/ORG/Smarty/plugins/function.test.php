<?php
//函数命名规则smarty_function_插件名
function smarty_function_test($params){
	//$params=>array('参数1'=>'参数值', '参数2'=>'参数值');
	$width = $params['width'];
	$height = $params['height'];
	$area = $width*$height;
	return $area;
}
	
?>