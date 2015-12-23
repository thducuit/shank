<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Core_Controller extends MX_Controller {
	
        private $data;

      	function __construct() {
                //if i remove this parent::__construct(); the error is gone
                parent::__construct();
                $this->load_helper();
      	}
      	
      	
      	private function load_helper() {
                $this->load->helper('url');
            		$this->load->helper('utility');	
        }
        /**
         * MULTI LANGUAGE
         * 
         */
        protected function load_lang() {
                $lang = strip_tags( $this->input->get('l') );
                if($lang) {
                        define('LANGUAGE', $lang);
                        $alias_name = $this->detect_alias_from_uri();
                        $alias = $this->get_alias($lang, $alias_name);
                        $this->navigation($alias);
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
        
        private function detect_alias_from_uri() {
                $uri = $this->uri->segment_array();
                $subjects = array_pop($uri);
                $partern = '/^[a-z0-9\-]+/';
                preg_match($partern, $subjects, $matches);
                return array_pop($matches);
        }

        private function get_alias($lang, $alias_name) {
                $this->load->Model("alias_default_model");
                return $this->alias_default_model->get_alias_by_language_and_name($lang, $alias_name);
        }
        
        private function navigation($alias) {
                if( count($alias) > 0 ) {
                        $module = $alias['alias_module'];
                        $alias_name = $alias['alias_name'];
                        $url = short_url($module, array($alias_name), true );
                        $url = substr($url, 1, strlen($url));
                        $url = base_url() . $url;
                        redirect( $url );
                }
        }
}
