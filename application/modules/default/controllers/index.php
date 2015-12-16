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
        $this->data['slider'] = $this->media_default_model->get_gallery('slider', DEFAULT_LANGUAGE);
        
        //RUN VIEW
        $this->template->build( 'index/index', $this->data );
	}
	
	public function test($lang) {
	    _pr($lang, true);
	}
}