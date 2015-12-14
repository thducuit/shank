<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sitemap extends Parent_Controller {

	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
	}
	
	public function index() {
	    //RUN VIEW
        $this->template->build( 'sitemap/index' );
	}
	
	public function test($lang) {
	    _pr($lang, true);
	}
}
