<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
        $this->load->model('User_level_model');
    }

    public function index()
    {
        check_login();
        $this->template->load('template','menu/menu_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Menu_model->json();
    }

    public function read($id) 
    {
        $row = $this->Menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'menu_id' => $row->menu_id,
		'menu_title' => $row->menu_title,
		'menu_url' => $row->menu_url,
		'menu_icon' => $row->menu_icon,
		'is_main_menu' => $row->is_main_menu,
		'is_active' => $row->is_active,
	    );
        $this->template->load('template','menu/menu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('menu/create_action'),
	    'menu_id' => set_value('menu_id'),
	    'menu_title' => set_value('menu_title'),
	    'menu_url' => set_value('menu_url'),
	    'menu_icon' => set_value('menu_icon'),
	    'is_main_menu' => set_value('is_main_menu'),
	    'is_active' => set_value('is_active'),
	);
       
        $this->template->load('template','menu/menu_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'menu_title' => $this->input->post('menu_title',TRUE),
		'menu_url' => $this->input->post('menu_url',TRUE),
		'menu_icon' => $this->input->post('menu_icon',TRUE),
		'is_main_menu' => $this->input->post('is_main_menu',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('menu'));
        }
    }

    public function update($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('menu/update_action'),
		'menu_id' => set_value('menu_id', $row->menu_id),
		'menu_title' => set_value('menu_title', $row->menu_title),
		'menu_url' => set_value('menu_url', $row->menu_url),
		'menu_icon' => set_value('menu_icon', $row->menu_icon),
		'is_main_menu' => set_value('is_main_menu', $row->is_main_menu),
		'is_active' => set_value('is_active', $row->is_active),
	    );
             $this->template->load('template','menu/menu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('menu_id', TRUE));
        } else {
            $data = array(
		'menu_title' => $this->input->post('menu_title',TRUE),
		'menu_url' => $this->input->post('menu_url',TRUE),
		'menu_icon' => $this->input->post('menu_icon',TRUE),
		'is_main_menu' => $this->input->post('is_main_menu',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Menu_model->update($this->input->post('menu_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $this->Menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('menu_title', 'menu title', 'trim|required');
	$this->form_validation->set_rules('menu_url', 'menu url', 'trim|required');
	$this->form_validation->set_rules('menu_icon', 'menu icon', 'trim|required');
	$this->form_validation->set_rules('is_main_menu', 'is main menu', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');

	$this->form_validation->set_rules('menu_id', 'menu_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function get_sub_menu()
    {

        $subModule = $this->input->post('subModule');
        $this->Menu_model->get_sub_module($subModule);
          
    }
}