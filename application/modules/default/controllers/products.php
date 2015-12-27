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
        //_pr($rs, true);
		$this->data['seo_title'] = $rs['category_seo_title'];
		$this->data['seo_keywords'] = $rs['category_seo_keywords'];
		$this->data['seo_description'] = $rs['category_seo_description'];


		//RUN VIEW
	    $this->template->build('products/category', $this->data);

	}
	
}