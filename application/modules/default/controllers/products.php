<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products extends Parent_Controller {

	 private $data;
	 
	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();
	}
	
	public function category($lang, $alias_name) {
		$this->load->Model("alias_default_model");
		$rs = $this->alias_default_model->get_by_name($alias_name);
		$category_id = $rs['fid'];
		$this->load->Model("category_default_model");
		$rs = (array)$this->category_default_model->get_by_id($category_id);
		$this->data['category'] = $rs;
        //_pr($rs, true);
		$this->data['seo_title'] = $rs['category_seo_title'];
		$this->data['seo_keywords'] = $rs['category_seo_keywords'];
		$this->data['seo_description'] = $rs['category_seo_description'];

		$this->load->Model("post_default_model");	
		$num_products = $this->post_default_model->count('product', LANGUAGE,$category_id);
		$pages = ceil($num_products/PAGINATION);
		$this->data['pages'] =  $pages;
		$current_page = (int)$this->input->get('p');
        $current_page = ($current_page == 0) ? 1 : $current_page;
        $start = PAGINATION * ($current_page - 1) ;
        $this->data['products']=$this->post_default_model->get_post_by_pagination('product', LANGUAGE, $start, PAGINATION,$category_id);
		//_pr($current_page,true);

		//RUN VIEW
	    $this->template->build('products/category', $this->data);

	}

	public function product($lang, $alias_name) {
		$this->load->Model("alias_default_model");
		$rs = $this->alias_default_model->get_by_name($alias_name);
		$post_id = $rs['fid'];
		$this->load->Model("post_default_model");
		$rs = (array)$this->post_default_model->get_by_id($post_id);
		$this->data['product'] = $rs;
		$this->data['seo_title'] = $rs['post_seo_title'];
		$this->data['seo_keywords'] = $rs['post_seo_keywords'];
		$this->data['seo_description'] = $rs['post_seo_description'];
		//_pr($rs,true);

		//RUN VIEW
	    $this->template->build('products/product', $this->data);


	}
	
}