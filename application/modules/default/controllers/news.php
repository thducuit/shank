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
        $this->data['breadcrumbs'] = $this->update_breadcrumbs('news');
	}
	
	public function index() {
		$this->load->Model("post_default_model");
		$this->data['news'] = $this->post_default_model->get_post('news', LANGUAGE);
		
		$rs = $this->post_default_model->get_page('news', LANGUAGE);
		$this->data['seo_title'] = $rs['post_seo_title'];
		$this->data['seo_description'] = $rs['post_seo_description'];
		$this->data['seo_keywords'] = $rs['post_seo_keywords'];
		
	    //RUN VIEW
        $this->template->build( 'news/index', $this->data );
	}
	
}
