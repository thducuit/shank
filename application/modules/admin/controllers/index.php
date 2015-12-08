<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Base_Admin_Controller {
    function __construct(){
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
    }

    public function index() {
        $data['meta'] = 'test';
        $this->template->title('Administrator Board');
        $this->template->build('index', $data);
    }

    public function category() {
        echo 'cat'; die();
    }
}