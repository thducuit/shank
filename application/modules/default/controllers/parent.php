<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/core.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Parent_Controller extends Core_Controller {
	
        private $data;

	function __construct() {
                //if i remove this parent::__construct(); the error is gone
                parent::__construct();
                
                
                $this->load_theme();
                $this->load_helper();
                $this->load_lang();
                
                $this->get_ads();
                $this->get_about_list();
                $this->get_products_list();
                $this->get_menu();
	}

        private function get_menu() {
                $this->load->Model("post_default_model");
                $this->load->Model("language_default_model");
                $rs = $this->post_default_model->get_page();
                $languages = $this->language_default_model->list_all();
                foreach($languages as $l) {
                        if($l['language_id'] == LANGUAGE) {
                                $this->data['menu_list']['current'] = get_list_by_language_id($l['language_id'], $rs);
                        }else {
                                $this->data['menu_list']['sub'] = get_list_by_language_id($l['language_id'], $rs); 
                        }    
                }
        }

        private function get_ads() {
                $this->load->Model("media_default_model");
                $this->data['ads'] = $this->media_default_model->get_gallery('ads', LANGUAGE);
        }

        private function get_products_list() {
                $this->load->Model("category_default_model");
                $this->data['products_list'] = $this->category_default_model->get_category('productcat', LANGUAGE); 
        }

        private function get_about_list() {
                $this->load->Model("post_default_model");
                $this->data['about_list'] = $this->post_default_model->get_post('about', LANGUAGE); 
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
        
        
}
