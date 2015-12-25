<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/group_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Group extends Base_Admin_Controller {
    
    private $data;
    private $class_view;
    private $params;
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        
        parent::__construct();
        
        $this->data = $this->get_data();
        $this->params = array();
        
        //GET VIEW
        $this->class_view = $this->router->fetch_class() . "/" . $this->router->fetch_method();
        
        
        //GET PARAMS
        $this->params = $this->request_params( new Group_inputs );
        
        
        //ADD PARAMS TO VIEW
        $this->data['params'] = $this->params;
        
        
        //LOAD MODEL
        $this->load_model();
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {
         $this->load->Model("group_admin_model");
         $this->data['list'] = $this->group_admin_model->list_all();
         
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data );
    }
    
    
    
    /**
     * ADD ACTIOM
     * 
     */
    public function add () {
        if( isset( $_POST['add'] ) ) {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $permission = $this->input->post('permission');
            $permission = ( is_array($permission) ) ? $permission : array();
            $data = array(
                'group_name' => $name,      
                'group_description' => $description,
                'group_builtin'     => 1,
                'group_datecreated' => date( 'Y-m-d H:i:s' ),
                'group_level'       => 1,
                'group_permission'  => json_encode($permission)
            );
            $this->group_admin_model->insert($data);
            
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Insert success') );
            //RUN VIEW
            redirect ('/admin/group');
        }
        $this->data['list_module'] = $this->module_admin_model->get_list();
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    
    /**
     * EDIT ACTION
     * 
     */
    public function edit () {
        $id = $this->input->get('id');
        if( isset( $_POST['update'] ) ) {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $permission = $this->input->post('permission');
            $permission = ( is_array($permission) ) ? $permission : array();
            $data = array(
                'group_name' => $name,      
                'group_description' => $description,
                'group_builtin'     => 1,
                'group_datecreated' => date( 'Y-m-d H:i:s' ),
                'group_level'       => 1,
                'group_permission'  => json_encode($permission)
            );
            $this->group_admin_model->update($id, $data);
            
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Update success') );
            //RUN VIEW
            redirect ('/admin/group');
        }
        $group = array();
        $this->data['list'] = $this->group_admin_model->get_by_id($id);
        $this->data['list_module'] = $this->module_admin_model->get_list();
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);    
    }
    
    
    
    /**
     * LOAD MODEL
     * 
     */
    private function load_model() {
        $this->load->Model('module_admin_model');
        $this->load->Model('group_admin_model');
    }
    
}