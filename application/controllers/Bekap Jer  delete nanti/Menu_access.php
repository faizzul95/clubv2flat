<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_access extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_access_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        check_login();
        $this->template->load('template','menu_access/menu_access_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Menu_access_model->json();
    }

    public function read($id) 
    {
        $row = $this->Menu_access_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_user_level' => $row->id_user_level,
		'menu_id' => $row->menu_id,
	    );
        $this->template->load('template','menu_access/menu_access_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_access'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('menu_access/create_action'),
	    'id' => set_value('id'),
	    'id_user_level' => set_value('id_user_level'),
	    'menu_id' => set_value('menu_id'),
	);
       
        $this->template->load('template','menu_access/menu_access_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_user_level' => $this->input->post('id_user_level',TRUE),
		'menu_id' => $this->input->post('menu_id',TRUE),
	    );

            $this->Menu_access_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('menu_access'));
        }
    }

    public function update($id) 
    {
        $row = $this->Menu_access_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('menu_access/update_action'),
		'id' => set_value('id', $row->id),
		'id_user_level' => set_value('id_user_level', $row->id_user_level),
		'menu_id' => set_value('menu_id', $row->menu_id),
	    );
             $this->template->load('template','menu_access/menu_access_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_access'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_user_level' => $this->input->post('id_user_level',TRUE),
		'menu_id' => $this->input->post('menu_id',TRUE),
	    );

            $this->Menu_access_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('menu_access'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Menu_access_model->get_by_id($id);

        if ($row) {
            $this->Menu_access_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('menu_access'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_access'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_user_level', 'id user level', 'trim|required');
	$this->form_validation->set_rules('menu_id', 'menu id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}