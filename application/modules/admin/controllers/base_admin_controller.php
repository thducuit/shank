<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Base_Admin_Controller extends MX_Controller {
    
    private $languages;
    private $module;
    private $module_url;
    private $module_list;
    private $data;
    
    function __construct(){
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        
        $this->module_list = array();
        
        $this->data = array();
        
        //LOAD THEME
        $this->load_theme();
        
        //LOAD LANGUAGE
        $this->lang->load(ADMIN_LANGUAGE, ADMIN_LANGUAGE); //$this->lang->load('custom', ADMIN_LANGUAGE);
        
        //LOAD LIBRARY
        $this->load_library();
        
        //LOAD HELPER
        $this->load_helper();
        
        //GET ALL LANGUAGES
        $this->get_languages();
        
        //GET CURRENT MODULE
        $this->get_module_by_code( $this->module_code() );
        
        $this->data['module_list'] = $this->get_module_list();
    }
    
    protected function get_data() {
        return $this->data;
    }
    
    protected function request_params( $inputs ) {
        return $inputs->get_request_params();
    }
    
    protected function languages() {
        return $this->languages;
    }
    
    protected function module() {
        return $this->module;
    }
    
    protected function module_code() {
        return ( !empty( $this->input->get('mod') ) ) ? $this->input->get('mod') : '';
    }
    
    protected function get_languages() {
        $langs = array();
        $this->load->Model("language_admin_model");
        $r = $this->language_admin_model->list_all();
        foreach($r as $l) {
            array_push($langs, $l['language_id']);
        }
        $this->languages = $langs;
    }
    
    protected function get_module_by_code($module_code) {
        $this->load->Model("module_admin_model");
        $this->module = $this->module_admin_model->get_by_code( $module_code );
        return $this->module;
    }
    
    protected function get_module_list() {
        $this->load->Model("module_admin_model");
        $this->module_list = $this->module_admin_model->get_list();
        return $this->module_list;
    }
    
    protected function module_url () {
        $module = $this->router->fetch_module();
        $class = $this->router->fetch_class(); // class = controller
        $method = $this->router->fetch_method(); 
        $this->module_url = "/$module/$class/$method";
        if( !empty($this->module->module_code) ) {
            $this->module_url .= "?mod=" . $this->module->module_code; 
        }
        return $this->module_url;
    }
    
    /**
     *  LOAD THEME 
     * 
     */
    private function load_theme() {
        $this->template->set_theme('admin_theme');
        $this->template->set_layout('one_col');
        $this->template->set_partial('header','header');
        $this->template->set_partial('footer','footer');
    }
    
    
    /**
     *  LOAD HELPER 
     * 
     */
    private function load_helper() {
        $this->load->helper('url');
        $this->load->helper('select');
        $this->load->helper('button');
        $this->load->helper('sort_input');
        $this->load->helper('pagination');
        $this->load->helper('utility');
        $this->load->helper('alias');
    }
    
    
    /**
     *  LOAD LIBRARY 
     * 
     *
     */
    private function load_library() {
        $this->load->library('session');
    }
    
}