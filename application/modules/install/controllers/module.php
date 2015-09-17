<?php
/**
 * Created by PhpStorm.
 * User: Tuan Anh
 * Date: 8/12/15
 * Time: 7:17 AM
 */
require_once APPPATH . 'modules/install/controllers/base_install_controller.php';
require_once APPPATH . "modules/install/controllers/inputs/module_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Module extends Base_Install_Controller {

    private $module;
    private $url;
    private $params;
     
    function __construct(){
        parent::__construct();
        $this->load->helper('custom_url');
        
        $this->module = 'module';
        $this->url = '/install/module';
    }

    public function index() {
        $this->load->helper('select');

        $this->params = $this->create_input_params( new Module_inputs );
        $data['params'] = $this->params;/*print_r($params);die();*/
        $select = array('module_id', 'module_name', 'module_code', 'module_link', 'module_order');

        $filters = array('module_parent' => (int)$this->params['pid'], 'module_status' => (int)$this->params['show']);

        $orders = array('module_order' => 'asc');

        $page = (int)$this->params['page'];
        $from = ($page - 1) * 20;
        $to = 20;
        
    	$this->load->Model("module_install_model");
        $data['list'] = $this->module_install_model->list_all_by_paging($select, $filters, $orders, $from, $to, $keyword = '');
        $data['list_parent'] = $this->module_install_model->list_all(array('module_id', 'module_name', 'module_level', 'module_parent'));
        
        /*$params = array();
        if ( isset($_GET['delete']) ) { 
            $params = $this->input->get();
            $this->delete($params);
        }else if( isset($_GET['update']) ) {
            $params = $this->input->get();
            $this->update($params);
        }*/
        $data['url'] = $this->url;
        
        $this->template->title('Module');
        $this->template->build('module/index', $data);
    }

    public function add() {
        $this->load->Model("module_install_model");
        
        if ( isset($_POST['add']) ) {
            $module_code = $this->input->post('module_code');
            $module_name = $this->input->post('module_name');
            $module_link = $this->input->post('module_link');
            $module_parent  = (int)$this->input->post('module_parent'); 
            $module_option  = json_encode($this->input->post('module_option')); 
            $module_status  = (int)$this->input->post('module_status');
            $module_order  = (int)$this->input->post('module_order'); 
            $module_level = '';

            if($module_parent > 0 )  {
                $parent = $this->module_install_model->get_by_id($module_parent);
                $module_level = $parent->module_level . '--';
            }
            $data = array(
                'module_code' => $module_code,
                'module_name' => $module_name,
                'module_link' => $module_link,
                'module_parent' => $module_parent,
                'module_option' => $module_option,
                'module_status' => $module_status,
                'module_order' => $module_order,
                'module_level' => $module_level
            );
            $result = $this->module_install_model->upsert($data);
            redirect('/install/module');
        }else {
            $this->load->helper('select');

            $data['list_parent'] = $this->module_install_model->list_all(array('module_id', 'module_name', 'module_level', 'module_parent'));
            $this->template->title('Module');
            $this->template->build('module/add', $data);
        }
    }

    public function edit() {

    }

    public function delete($params) {
        if(empty($params)) return;
        
    }

    public function update($params) {
        
    }
}