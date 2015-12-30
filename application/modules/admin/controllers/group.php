<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/group_inputs.php";

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Group extends Base_Admin_Controller
{

    private $data;
    private $class_view;
    private $params;


    /**
     * CONSTRUCT
     *
     */
    function __construct()
    {

        parent::__construct();

        //CHECK LOGGED IN
        $this->check_logged_in();

        $this->data = $this->get_data();

        $this->params = array();

        //GET VIEW
        $this->class_view = $this->router->fetch_class() . "/" . $this->router->fetch_method();


        //GET PARAMS
        $this->params = $this->request_params(new Group_inputs);

        //ADD PARAMS TO VIEW
        $this->data['params'] = $this->params;


        //LOAD MODEL
        $this->load_model();
    }


    /**
     * INDEX ACTION
     *
     */
    public function index()
    {
        $this->page_has_permission('group', VIEW);
        
        //SELECT
        $select = array( );
        //FILTER
        $filters = array();
        //ORDER
        $orders = array('group_id' => 'asc');
        //PAGINATION
        $page = (int)$this->params['page'];
        $range = (int)$this->params['range'];
        $from = ($page - 1) * $range;
        //DATA TO VIEW
        $this->data['list'] = $this->group_admin_model->list_all_by_paging( $select, $filters, $orders, $from, $range, $keyword = $this->params['keyword'] );

        //RUN VIEW
        $this->template->build($this->class_view, $this->data);
    }


    /**
     * ADD ACTIOM
     *
     */
    public function add()
    {
        $this->page_has_permission('group', ADD);

        if (isset($_POST['add'])) {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $permission = $this->input->post('permission');
            $permission = (is_array($permission)) ? $permission : array();
            $data = array(
                'group_name' => $name,
                'group_description' => $description,
                'group_builtin' => 1,
                'group_datecreated' => date('Y-m-d H:i:s'),
                'group_level' => 1,
                'group_permission' => json_encode($permission)
            );
            $this->group_admin_model->insert($data);

            //NOTICE
            $this->session->set_flashdata('notice', array('status' => 'success', 'message' => 'Insert success'));
            //RUN VIEW
            redirect('/admin/group');
        }
        $this->data['list_module'] = $this->module_admin_model->get_list();
        //RUN VIEW
        $this->template->build($this->class_view, $this->data);
    }


    /**
     * EDIT ACTION
     *
     */
    public function edit()
    {
        $this->page_has_permission('group', EDIT);

        $id = $this->input->get('id');
        if (isset($_POST['update'])) {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $permission = $this->input->post('permission');
            $permission = (is_array($permission)) ? $permission : array();
            $data = array(
                'group_name' => $name,
                'group_description' => $description,
                'group_builtin' => 1,
                'group_datecreated' => date('Y-m-d H:i:s'),
                'group_level' => 1,
                'group_permission' => json_encode($permission)
            );
            $this->group_admin_model->update($id, $data);

            //NOTICE
            $this->session->set_flashdata('notice', array('status' => 'success', 'message' => 'Update success'));
            //RUN VIEW
            redirect('/admin/group');
        }
        $group = array();
        $this->data['list'] = $this->group_admin_model->get_by_id($id);
        $this->data['list_module'] = $this->module_admin_model->get_list();
        //RUN VIEW
        $this->template->build($this->class_view, $this->data);
    }


    /**
     * UPDATE
     * 
     */
    public function update() {

        $this->page_has_permission('group', EDIT);

        $type = $this->input->post('type');
        if ( $type == 'delete' ) {
            $ids = $this->input->post('ids');
            if( count($ids) > 0 ) {
                foreach($ids as $id) {
                    $this->remove($id);
                }
            }
        }
        
        //NOTICE
        $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Update success') );
        //BACK TO INDEX
        redirect( url_add_params($this->params, '/admin/group') );
    }
    
    
    
    /**
     * DELETE
     * 
     */
    public function delete() {

        $this->page_has_permission('group', DELETE);

        $id = (int)$this->input->get('id');
        $this->remove($id);

        //NOTICE
        $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Delete success') );
        //BACK TO INDEX
        redirect( url_add_params($this->params, '/admin/group') );
    }
    
    
    
    /**
     * REMOVE BY ID 
     * 
     */
    private function remove($id) {
        //DELETE DATA
        $this->group_admin_model->delete( $id );
    }
    
    /**
     * LOAD MODEL
     *
     */
    private function load_model()
    {
        $this->load->Model('module_admin_model');
        $this->load->Model('group_admin_model');
    }

}