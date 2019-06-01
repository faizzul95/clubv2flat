<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_level_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        check_login();
        $this->template->load('template','user_level/user_level_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_level_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_level_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user_level' => $row->id_user_level,
		'nama_level' => $row->nama_level,
	    );
        $this->template->load('template','user_level/user_level_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_level'));
        }
    }

    function access(){
        $data['level'] = $this->db->get_where('user_level',array('id_user_level'=>$this->uri->segment(3)))->row_array();
        $is_main_menu  = 0;
        $params = array('is_main_menu'=>$is_main_menu);
        $data['menu'] = $this->db->get_where('menu',$params)->result();
        // $data['menu'] = $this->db->get('menu')->result();
        $this->template->load('template','user_level/user_level_read', $data);
    }
    
    function give_access_ajax(){
        $menu_id  = $_GET['menu_id'];
        $id_user_level= $_GET['level'];

        if ($id_user_level == 1) {
           $id_user_level = "superadmin";
        }elseif ($id_user_level == 2) {
            $id_user_level = "admin";
        }else
            $id_user_level = "member";

        // check data
        $params = array('menu_id'=>$menu_id,'id_user_level'=>$id_user_level);
        $akses = $this->db->get_where('menu_access',$params);
        if($akses->num_rows()<1){
            // insert new menu
            $this->db->insert('menu_access',$params);
        }else{
            $this->db->where('menu_id',$menu_id);
            $this->db->where('id_user_level',$id_user_level);
            $this->db->delete('menu_access');
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_level/create_action'),
	    'id_user_level' => set_value('id_user_level'),
	    'nama_level' => set_value('nama_level'),
	);
       
        $this->template->load('template','user_level/user_level_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_level' => $this->input->post('nama_level',TRUE),
	    );

            $this->User_level_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_level'));
        }
    }

    public function update($id) 
    {
        $row = $this->User_level_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_level/update_action'),
		'id_user_level' => set_value('id_user_level', $row->id_user_level),
		'nama_level' => set_value('nama_level', $row->nama_level),
	    );
             $this->template->load('template','user_level/user_level_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_level'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user_level', TRUE));
        } else {
            $data = array(
		'nama_level' => $this->input->post('nama_level',TRUE),
	    );

            $this->User_level_model->update($this->input->post('id_user_level', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_level'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_level_model->get_by_id($id);

        if ($row) {
            $this->User_level_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_level'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_level'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_level', 'nama level', 'trim|required');

	$this->form_validation->set_rules('id_user_level', 'id_user_level', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}