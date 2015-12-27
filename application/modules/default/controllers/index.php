<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Parent_Controller {

	 private $data;

	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();

	}
	
	public function index() {
        $this->load->Model("media_default_model");
        $this->data['slider'] = $this->media_default_model->get_gallery('slider', LANGUAGE);

        $rs = $this->post_default_model->get_page('index', LANGUAGE);
		$this->data['seo_title'] = $rs['post_seo_title'];
		$this->data['seo_description'] = $rs['post_seo_description'];
		$this->data['seo_keywords'] = $rs['post_seo_keywords'];
        $num_products = $this->post_default_model->count('product', LANGUAGE);

        $pages = ceil($num_products / PAGINATION);
        $this->data['pages'] = $pages;

        $current_page = (int)$this->input->get('p');
        $current_page = ($current_page == 0) ? 1 : $current_page;
        $start = PAGINATION * ($current_page - 1) ;
        $this->data['products']=$this->post_default_model->get_post_by_pagination('product', LANGUAGE, $start, PAGINATION);



        
        //RUN VIEW
        $this->template->build( 'index/index', $this->data );
	}
	
	
}