<?php
class TestController {
//控制器的作用是调用模型，并调用试图，将模型产生的数据传递给试图，并让相关试图去显示
	public function show() {
		global $view;
		$testModel = M('test');
		$data = $testModel->get_data('test hello word!');
		//$testView = V('test');
		//$testView->display($data);
		$view->assign('str', $data);
		$view->display('test.tpl');
	}
}
?>