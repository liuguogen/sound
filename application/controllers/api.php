<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
	/**
	**API 接口
	**@param $params post参数
	**@author liuguogen
	**@time 2016-03-14 10:44
	**/

	public function index(){
		$params=$this->input->post();
		$par=$params['method'];
		$api=explode(".", $par);
		$model=$api[0];
		$method=$api[1];
		$this->load->model($model."_model",$model);
		$data=$this->$model->$method($params);
		if($params['type']=='text'){
			echo $data;exit();
		}elseif ($params['type']=='html') {
			echo $data;exit();
		}elseif ($params['type']=='json') {
			echo json_encode($data);exit();
		}else{
			echo json_encode($data);exit();
		}
	}
}
?>