<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Parent_Controller extends MX_Controller {
	
	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->lang->load('default',DEFAULT_LANGUAGE );
        $this->template->set_theme('default_theme');
        $this->template->set_layout('two_col');
        $this->template->set_partial('header','header');
        $this->template->set_partial('sidebar','sidebar');
        $this->template->set_partial('footer','footer');
	}
}
