<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Config extends Base_Admin_Controller {
    
    private $module;
    private $languages;
    private $class_view;
    private $url;
    private $data;
    
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        
        parent::__construct();

        //CHECK LOGGED IN
        $this->check_logged_in();
        
        $this->data = $this->get_data();
        
        $this->module = array();
        
        //GET VIEW
        $this->class_view = $this->router->fetch_class() . "/" . $this->router->fetch_method();
        
        //GET CURRENT URL
        $this->url = $this->module_url();
        
        //GET LANGUAGES
        $this->languages = $this->languages();
        
        //GET MODULE
        $this->module = $this->module();

        $this->data['languages'] = $this->languages;
        
        //LOAD MODEL
        $this->load_model();
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Config' );
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {

        $this->page_has_permission('config', VIEW);

        /*$g = $this->media_admin_model->list_all(array(), array('media_module' => $this->module_code()));
        if( isset($_POST['galleries']) )  {
            if( empty($g) ) {
                $this->insert();
            }else {
                $this->update();
            }
        } 
        foreach($this->languages as $l) {
            $this->data['list'][$l] = get_list_by_language_id($l, $g);
        }*/
        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    private function insert() {
    }
    
    
    
    private function update() {
    }
    
    
    /** 
     * LOAD ALL MODEL
     * 
     */
    private function load_model() {
        $this->load->Model("langmap_admin_model");
        $this->load->Model("media_admin_model");
    }
    
}