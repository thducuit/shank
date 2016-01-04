<?php 
//REQUIRE
require_once APPPATH . 'modules/default/controllers/parent.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends Parent_Controller {
	private $data;

	 function __construct() {
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
        $this->data = $this->get_data();
        $this->data['breadcrumbs'] = $this->update_breadcrumbs('contact');
	}
	
	public function index() {
		
		$this->load->Model("post_default_model");
		$this->load->library('email');

		//SEND MAIL
        if( isset($_POST['send']) ) {
        	$name = $this->input->post('txtFullname');
        	$email = $this->input->post('txtEmail');
        	$tel  = $this->input->post('txtTel');
        	$company  = $this->input->post('txtCompany');
        	$content  = $this->input->post('txtContent');

        	$this->email->initialize(array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',//ssl:465 , tsl:587,25
			  'smtp_user' => 'thducuit@gmail.com',
			  'smtp_pass' => 'choancut321',
			  'smtp_port' => 465,
			  'crlf' => "\r\n",
			  'newline' => "\r\n",
			  'mailtype'  => 'html', 
		      'charset' => 'utf-8',
		      'wordwrap' => TRUE
			));

			$this->email->from('ng.tuananh1907@gmail.com', 'Your Name');
			$this->email->to('thducuit@gmail.com');
			//$this->email->cc('another@another-example.com');
			//$this->email->bcc('them@their-example.com');
			$this->email->subject('Email Test 122');
			$this->email->message('Testing the email class.');
			if($this->email->send()) {
		       redirect('/contact.html');
		    }

			echo $this->email->print_debugger(); die();
        }


        
		//$this->data['contact'] = $this->post_default_model->get_post('contact', LANGUAGE);
		
		$page = $this->post_default_model->get_page('contact', LANGUAGE);
		$this->data['contact'] = $page;

		//SEO
		$this->data['seo_title'] = $page['post_seo_title'];
		$this->data['seo_description'] = $page['post_seo_description'];
		$this->data['seo_keywords'] = $page['post_seo_keywords'];

        //RUN VIEW
        $this->template->build( 'contact/index', $this->data);

                //CACHING
        $this->output->cache(CACHE_TIME);
	}
}
