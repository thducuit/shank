<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends Base_Admin_Controller {
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        parent::__construct();
        
        //LOAD THEME
        $this->load_theme();
        
        //LOAD MODEL
        $this->load_model();
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {
        if( isset($_POST['login']) ) {
            $username = strip_tags( $this->input->post('wl-username') );
            $password = strip_tags( $this->input->post('wl-password') );
            $password = md5( $password . ENCRYPTION_KEY );
            $user = $this->user_admin_model->login( $username, $password );
            if( $user == false ) {
                //NOTICE
                $this->session->set_flashdata( 'notice', array('status'=>'error', 'message'=>'Sai username hoac password') );
                //RUN VIEW
                redirect ('/admin/login');
            }else {
                _pr($user);
            }
        }
        $this->template->build('login/index');
    }
    
    
    
    /**
     *  LOAD THEME 
     * 
     */
    private function load_theme() {
        $this->template->set_theme('admin_theme');
        $this->template->set_layout('login');
        $this->template->set_partial('login_header','login_header');
        $this->template->set_partial('login_footer','login_footer');
    }
    
    
    
    /**
     *  LOAD MODEL 
     * 
     */
    private function load_model() {
        $this->load->Model("user_admin_model");
    }
    
    
}