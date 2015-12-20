<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends Parent_Controller {
	private $data;

	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();
	}
	
	public function index() {
		$this->load->Model("post_default_model");
		$this->data['news']= $this->post_default_model->get_post('news', DEFAULT_LANGUAGE);
		
	    //RUN VIEW
        $this->template->build( 'news/index', $this->data );
	}
	
}
