<?php
/**
 * Created by PhpStorm.
 * User: Tuan Anh
 * Date: 8/12/15
 * Time: 7:17 AM
 */
require_once APPPATH . 'modules/admin/controllers/parent.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Parent_Controller {
    function __construct(){
        //if i remove this parent::__construct(); the error is gone
        parent::__construct();
    }

    public function index() {
        $data['meta'] = 'ssss';
        $this->template->title('about this site');
        $this->template->build('index', $data);
    }

    public function category() {
        echo 'cat'; die();
    }
}