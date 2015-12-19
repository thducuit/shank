<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About extends Parent_Controller {

	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
	}
	
	public function index() {
	    echo 'trang about index controller';
	    $data['a'] = 10;
	    $data['b'] = 'duc';
	    $data['c'] = [10,4,5];
	    //RUN VIEW
	    $this->template->build('about/index');
	}
	// public function test($lang) {
	//     _pr($lang, true);
	// }
	
	public function detail($lang, $alias) {
	    echo 'trang about';
	}
}