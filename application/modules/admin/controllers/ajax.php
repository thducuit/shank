<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends Base_Admin_Controller {
    
    private $data;
    private $class_view;
    private $params;
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        parent::__construct();    
    }
    
    
    
    /**
     * ALIAS
     * 
     */
    public function alias() {
        $title = $this->input->get('title');
        echo alias($title);
    }
}