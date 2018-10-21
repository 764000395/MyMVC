<?php
//控制器
function C($name, $method) {
	$name = ucfirst($name);
	require 'libs/controllers/' . $name . 'Controller.class.php';
	// $testController = new testController();
	// $testController->show();
	//echo '$obj = new ' . $name . 'Controller(); $obj->' . $method . '();';
	eval('$obj = new ' . $name . 'Controller(); $obj->' . $method . '();'); //将字符串转化为php语句（不安全）
}

//模型
function M($name) {
	$name = ucfirst($name);
	require 'libs/models/' . $name . 'Model.class.php';
	// $testModel = new TestModel();
	eval('$obj = new ' . $name . 'Model();');
	return $obj;
}

//视图
function V($name) {
	$name = ucfirst($name);
	require 'libs/views/' . $name . 'View.class.php';
	eval('$obj = new ' . $name . 'View();');
	return $obj;
}

//字符串过滤
function daddslashes($str) {
	return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}

//调用第三方类ORG
/*
*	path 路径
*	name 第三方类名
*	params 该类初始化的时候需要指定、赋值的属性，格式为 array(属性名=>属性值, 属性名1=>属性值1)
*/
function ORG($path, $name, $params = array()){
	require 'libs/ORG/'.$path.$name.'.class.php'; 
	//eval('$obj = new'.$name.'()');
	$obj = new $name();
	if(!empty($params)){
		foreach($params as $key => $value){
			//eval('$obj->'.$key.'='.$value);
			$obj->$key = $value;
		}
	}
	return $obj;
}
?>