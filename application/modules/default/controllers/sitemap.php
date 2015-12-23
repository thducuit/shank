<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sitemap extends Parent_Controller {
	private $data;
	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();
	}
	
	public function index() {
	    //RUN VIEW
        $this->template->build( 'sitemap/index', $this->data );
	}
	
	// public function test($lang) {
	//     _pr($lang, true);
	// }
}
