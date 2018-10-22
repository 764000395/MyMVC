<?php
//smarty_modifier_插件名
function smarty_modifier_test($utime, $format){
	return date($format, $utime);
}
?>