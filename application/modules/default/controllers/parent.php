<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Parent_Controller extends MX_Controller {
	
        private $data;

	function __construct() {
                //if i remove this parent::__construct(); the error is gone
                parent::__construct();
                
                $this->load_lang();
                $this->load_theme();
                $this->load_helper();
                
                $this->get_ads();
	}


        private function get_ads() {
                $this->load->Model("media_default_model");
                $this->data['ads'] = $this->media_default_model->get_gallery('ads', LANGUAGE);
        }
        
        private function load_theme() {
                $this->template->set_theme('default_theme');
                $this->template->set_layout('two_col');
                $this->template->set_partial('header','header');
                $this->template->set_partial('sidebar','sidebar');
                $this->template->set_partial('footer','footer');
        }
        
        private function load_helper() {
                $this->load->helper('url');
                $this->load->helper('utility');
        }
        
        protected function get_data() {
                return $this->data;
        }
        
        protected function load_lang() {
                $lang = strip_tags( $this->input->get('l') );
                if($lang) {
                        define('LANGUAGE', $lang);
                }else {
                        $l =  $this->uri->segment(1);
                        $this->load->Model('language_default_model');
                        $rs = (array)$this->language_default_model->get_by_id($l);
                        if( count($rs) ) {
                                define('LANGUAGE', $l);
                        }else {
                                define('LANGUAGE', DEFAULT_LANGUAGE);
                        }
                        
                }
                $this->lang->load( 'default', LANGUAGE );
        }
}
