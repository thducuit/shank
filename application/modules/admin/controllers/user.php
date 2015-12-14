<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/user_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends Base_Admin_Controller {
    
    private $data;
    private $class_view;
    private $params;
    
    /**
     * CONSTRUCT 
     * 
     */
     function __construct() {
         parent::__construct();
         $this->data = $this->get_data();
         $this->params = array();
         
         //GET VIEW
         $this->class_view = $this->router->fetch_class() . "/" . $this->router->fetch_method();
         
         
         //GET PARAMS
         $this->params = $this->request_params( new User_inputs );
         
         
         //ADD PARAMS TO VIEW
         $this->data['params'] = $this->params;
     }
     
     
    /**
     * INDEX ACTION 
     * 
     */
     public function index() {
         $this->load->Model("user_admin_model");
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
          if(isset($_POST['add'])){
              $data = array();
              $data['username'] = $this->input->post('username');
              $data['password'] = $this->input->post('password');
              $data['password'] = md5( $data['password'] . ENCRYPTION_KEY );
              $data['fullname'] = $this->input->post('fullname');
              $data['email'] = $this->input->post('email');
              $data['gender'] = $this->input->post('gender');
              $data['phone'] = $this->input->post('phone');
              $data['address'] = $this->input->post('address');
              $data['group_id'] = (int)$this->input->post('group_id');
              $data['user_builtin'] = 0;
              $data['active'] = 0;
              $this->user_admin_model->insert($data);
                //NOTICE
                $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>$this->lang->line('txt_insertsuccess')) ); 
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
        
        if (isset($_POST['update'])) {
          $data = array();
          $data['username'] = $this->input->post('username');
          $data['fullname'] = $this->input->post('fullname');
          $data['email'] = $this->input->post('email');
          $data['gender'] = $this->input->post('gender');
          $data['phone'] = $this->input->post('phone');
          $data['address'] = $this->input->post('address');
          $data['group_id'] = (int)$this->input->post('group_id');
          $data['user_builtin'] = 0;
          $data['active'] = (int)$this->input->post('active');
          $this->user_admin_model->update($user_id,$data);
          //NOTICE
          $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>$this->lang->line('txt_updateinfor')) );
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
     
     
     /**
      * CHANGE PASSWORD 
      * 
      * kiểm tra người dùng nhập password cũ có đúng ko : ( kiểm tra = cách select với userid tương ưng + old_password nếu có trả ra kết quả nếu không có trả về null )  
      *  + đúng->update password mới vào db
      *  + sai-> trở về trang password , bật lỗi lên ( thông báo password cũ nhập chưa đúng)
      * 
      */
     public function password() {      
       $this->load->Model("user_admin_model");
       $user_id = $this->input->get('userid');
       if ( isset($_POST['change']) ) {
          $old_password = $this->input->post('old_password');
          $old_password = md5($old_password.ENCRYPTION_KEY);
          $new_password = $this->input->post('new_password');
          $new_password = md5($new_password.ENCRYPTION_KEY);
          $rs = $this->user_admin_model-> validate($old_password, $user_id);
          
          if (empty($rs)) {
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'error', 'message'=>$this->lang->line('txt_invalidoldpass')) );
            redirect ('/admin/user/password?userid='.$user_id);
          }
          else {
            $data = array();
            $data['password'] = $new_password;
            $this->user_admin_model->update($user_id,$data);
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>$this->lang->line('txt_updatepasssucces')) );
            redirect ('/admin/user');

          } 
       } else {
         $this->template->build('user/password', $this->data);
       }
     }
}