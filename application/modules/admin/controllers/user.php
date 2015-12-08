<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/user_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends Base_Admin_Controller {
    
    private $data;
     
    /**
     * CONSTRUCT 
     * 
     */
     function __construct() {
         parent::__construct();
         $this->data = $this->get_data();
     }
     
     
    /**
     * INDEX ACTION 
     * 
     */
     public function index() {
         $this->load->Model("user_admin_model");
        // $this->data['list'] = $this->user_admin_model->list_all(); 
         //RUN VIEW
        //$this->template->build('user/index', $this->data);
         
         if( isset($_GET['cmdDel']) ) {
          $ids = $this->input->get('ids');
          foreach ($ids as $id) {
           $this->user_admin_model->delete($id);
          } 
          redirect ('/admin/user');
         }
         else{
          $this->data['list'] = $this->user_admin_model->list_all();
          $this->template->build('user/index', $this->data);
         }
     }
     
     /**
     * ADD ACTION 
     * 
     */
     
     public function add() {
          $this->load->Model("user_admin_model");   
          $this->load->Model("group_admin_model");  
          if(isset($_POST['cmdAdd'])){
              $data = array();
              $data['username'] = $this->input->post('username');
              $data['password'] = $this->input->post('password');
              $data['password'] = md5( $data['password'] . ENCRYPTION_KEY );
              $data['fullname'] = $this->input->post('fullname');
              $data['email'] = $this->input->post('email');
              $data['gender'] = $this->input->post('gender');
              $data['phone'] = $this->input->post('phone');
              $data['address'] = $this->input->post('address');
              $this->user_admin_model->insert($data);
              
               redirect( '/admin/user' );
          }else {
              $this->data['list_group'] = $this->group_admin_model->list_all( array('group_id', 'group_name' ) );
              $this->template->build('user/add', $this->data);
              
          }
     }
     
     /**
     * EDIT ACTION 
     * 
     */
     
     public function edit() {
        $user_id = $this->input->get('userid');
        $this->load->Model("user_admin_model");
        $this->load->Model("group_admin_model");
        
        if (isset($_POST['cmdEdit'])) {
          $data = array();
          $data['username'] = $this->input->post('username');
          /*$data['password'] = $this->input->post('password');
          $data['password'] = md5( $data['password'] . ENCODE_STRING );*/
          $data['fullname'] = $this->input->post('fullname');
          $data['email'] = $this->input->post('email');
          $data['gender'] = $this->input->post('gender');
          $data['phone'] = $this->input->post('phone');
          $data['address'] = $this->input->post('address');
          //_pr($data, true);
          $this->user_admin_model->update($user_id,$data);
          redirect('/admin/user');
        }else {
         $this->data['list'] = (array)$this->user_admin_model->get_by_id($user_id);
         $this->data['list_group'] = $this->group_admin_model->list_all( array('group_id', 'group_name' ) );
         $this->template->build('user/edit', $this->data);
        }
     }
     
     
     public function delete() {
      $user_id = $this->input->get('userid');
      $this->load->Model("user_admin_model");
      $this->user_admin_model->delete($user_id);
      redirect ('/admin/user');
     }
    
}