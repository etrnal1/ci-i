<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	#intval floatval  
	public function index()
	{

		$str = '1234567';

		var_dump(intval($str));

//函数 强制类型转换		
   //settype(type)
		

		//if($status)
		//	echo "string";
		//else

		//	echo 'unset(var)';
		//$fp = fopen('inde.php', 'r');

		//var_dump($fp);
		//变量未定义
		//unset 销毁一个变量
		//这个变量没有值
		//

		//$mixed = array(1,5,3.14,true,false,'千锋');
		//var_dump($mixed);
		$this->load->view('welcome_message');
	}
	public function register()
	{
		echo '请注册';
	}
}
