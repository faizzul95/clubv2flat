<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activity extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('activity/activity_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Activity_model->json();
    }

    public function read($id) 
    {
        $row = $this->Activity_model->get_by_id($id);
        if ($row) {
            $data = array(
		'act_id' => $row->act_id,
		'act_name' => $row->act_name,
		'act_post_by' => $row->act_post_by,
		'act_description' => $row->act_description,
		'act_date' => $row->act_date,
		'act_time' => $row->act_time,
		'act_venue' => $row->act_venue,
		'act_category' => $row->act_category,
		'act_image' => $row->act_image,
		'act_fee' => $row->act_fee,
	    );
            $this->load->view('activity/activity_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('activity'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('activity/create_action'),
	    'act_id' => set_value('act_id'),
	    'act_name' => set_value('act_name'),
	    'act_post_by' => set_value('act_post_by'),
	    'act_description' => set_value('act_description'),
	    'act_date' => set_value('act_date'),
	    'act_time' => set_value('act_time'),
	    'act_venue' => set_value('act_venue'),
	    'act_category' => set_value('act_category'),
	    'act_image' => set_value('act_image'),
	    'act_fee' => set_value('act_fee'),
	);
        $this->load->view('activity/activity_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'act_name' => $this->input->post('act_name',TRUE),
		'act_post_by' => $this->input->post('act_post_by',TRUE),
		'act_description' => $this->input->post('act_description',TRUE),
		'act_date' => $this->input->post('act_date',TRUE),
		'act_time' => $this->input->post('act_time',TRUE),
		'act_venue' => $this->input->post('act_venue',TRUE),
		'act_category' => $this->input->post('act_category',TRUE),
		'act_image' => $this->input->post('act_image',TRUE),
		'act_fee' => $this->input->post('act_fee',TRUE),
	    );

            $this->Activity_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('activity'));
        }
    }

    public function update($id) 
    {
        $row = $this->Activity_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('activity/update_action'),
		'act_id' => set_value('act_id', $row->act_id),
		'act_name' => set_value('act_name', $row->act_name),
		'act_post_by' => set_value('act_post_by', $row->act_post_by),
		'act_description' => set_value('act_description', $row->act_description),
		'act_date' => set_value('act_date', $row->act_date),
		'act_time' => set_value('act_time', $row->act_time),
		'act_venue' => set_value('act_venue', $row->act_venue),
		'act_category' => set_value('act_category', $row->act_category),
		'act_image' => set_value('act_image', $row->act_image),
		'act_fee' => set_value('act_fee', $row->act_fee),
	    );
            $this->load->view('activity/activity_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('activity'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('act_id', TRUE));
        } else {
            $data = array(
		'act_name' => $this->input->post('act_name',TRUE),
		'act_post_by' => $this->input->post('act_post_by',TRUE),
		'act_description' => $this->input->post('act_description',TRUE),
		'act_date' => $this->input->post('act_date',TRUE),
		'act_time' => $this->input->post('act_time',TRUE),
		'act_venue' => $this->input->post('act_venue',TRUE),
		'act_category' => $this->input->post('act_category',TRUE),
		'act_image' => $this->input->post('act_image',TRUE),
		'act_fee' => $this->input->post('act_fee',TRUE),
	    );

            $this->Activity_model->update($this->input->post('act_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('activity'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Activity_model->get_by_id($id);

        if ($row) {
            $this->Activity_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('activity'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('activity'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('act_name', 'act name', 'trim|required');
	$this->form_validation->set_rules('act_post_by', 'act post by', 'trim|required');
	$this->form_validation->set_rules('act_description', 'act description', 'trim|required');
	$this->form_validation->set_rules('act_date', 'act date', 'trim|required');
	$this->form_validation->set_rules('act_time', 'act time', 'trim|required');
	$this->form_validation->set_rules('act_venue', 'act venue', 'trim|required');
	$this->form_validation->set_rules('act_category', 'act category', 'trim|required');
	$this->form_validation->set_rules('act_image', 'act image', 'trim|required');
	$this->form_validation->set_rules('act_fee', 'act fee', 'trim|required');

	$this->form_validation->set_rules('act_id', 'act_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Activity.php */
/* Location: ./application/controllers/Activity.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-13 04:53:27 */
/* http://harviacode.com */