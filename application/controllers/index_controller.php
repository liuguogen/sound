<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_controller extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
	  parent::__construct();
	  $this->config->set_item('header_data',array('name'=>'123','age'=>2));
	  //$this->_pre_contruct();
	}

	// private function  _pre_contruct() {
	// 	$this->load->view('public/footer',array('test'=>'123'));
	// }
	public function index()
	{
		//var_export($this->config->item('age','header_data'));exit;
		// $this->load->model('news_model','news');
		// $data=$this->news->getList('*','info',array('full_name|like'=>'测试','info_id'=>1));
		// var_export($data);exit;
		// $rRow=$this->db->select('*')->from('admin')->get();
		// if($rRow->num_rows()<1)return false;
		// echo "<pre>";
		// var_export($rRow->result_array());exit();
		// return $rRow->row_array();
		$this->load->view('home/index');
	}
	/***
	**关于我们
	**/
	public function about() {
		$this->load->view('home/about');
	}
	/**
	**产品展示
	**/
	public function product() { 
		$this->load->view('home/product');
	}
	/**
	**新闻中心
	*/
	public function news() {
		$this->load->view('home/news');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */