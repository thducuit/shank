<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends Base_Admin_Controller {
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        parent::__construct();

        //CHECK LOGGED IN
        $this->check_logged_in();

    }


    /**
     * create alias
     */
    public function alias() {
        $title = $this->input->get('title');
        echo alias($title);
    }
}