<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_detail_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('user_detail/user_detail_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_detail_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
    		'detail_id' => $row->detail_id,
    		'detail_fullname' => $row->detail_fullname,
    		'detail_phone' => $row->detail_phone,
    		'detail_email' => $row->detail_email,
    		'detail_address' => $row->detail_address,
    		'user_id' => $row->user_id,
	    );
            $this->load->view('user_detail/user_detail_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_detail'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_detail/create_action'),
	    'detail_id' => set_value('detail_id'),
	    'detail_fullname' => set_value('detail_fullname'),
	    'detail_phone' => set_value('detail_phone'),
	    'detail_email' => set_value('detail_email'),
	    'detail_address' => set_value('detail_address'),
	    'user_id' => set_value('user_id'),
	);
        $this->load->view('user_detail/user_detail_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'detail_fullname' => $this->input->post('detail_fullname',TRUE),
		'detail_phone' => $this->input->post('detail_phone',TRUE),
		'detail_email' => $this->input->post('detail_email',TRUE),
		'detail_address' => $this->input->post('detail_address',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
	    );

            $this->User_detail_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_detail'));
        }
    }

    public function update() 
    {
        
        // $userID = $this->session->userdata('userid');
        // $row = $this->User_detail_model->get_by_id($userID);

        $user_id = $this->input->post('user_id',TRUE);
        $detail_id = $this->input->post('detail_id',TRUE);
        $detail_fullname = $this->input->post('detail_fullname',TRUE);
        $detail_phone = $this->input->post('detail_phone',TRUE);
        $detail_phone = $this->input->post('detail_phone',TRUE);
        $detail_address = $this->input->post('detail_address',TRUE);

        $row = $this->User_detail_model->get_by_id($user_id);
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_detail/update_action'),
        		'detail_id' => set_value('detail_id', $row->detail_id),
        		'detail_fullname' => set_value('detail_fullname', $row->detail_fullname),
        		'detail_phone' => set_value('detail_phone', $row->detail_phone),
        		'detail_email' => set_value('detail_email', $row->detail_email),
        		'detail_address' => set_value('detail_address', $row->detail_address),
        		'user_id' => set_value('user_id', $row->user_id),
	    );
            // $this->load->view('user_detail/user_detail_form', $data);

            $this->template->load('template','user_profile', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            // redirect(site_url('user_detail'));
            $this->template->load('template','user_profile', $data);
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('detail_id', TRUE));
        } else {
            $data = array(
    		'detail_fullname' => $this->input->post('detail_fullname',TRUE),
    		'detail_phone' => $this->input->post('detail_phone',TRUE),
    		'detail_email' => $this->input->post('detail_email',TRUE),
    		'detail_address' => $this->input->post('detail_address',TRUE),
    		'user_id' => $this->input->post('user_id',TRUE),
	    );
            $this->User_detail_model->update($this->input->post('detail_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            // redirect(site_url('user_detail'));
            $this->template->load('template','user_profile', $data);
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_detail_model->get_by_id($id);

        if ($row) {
            $this->User_detail_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_detail'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_detail'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('detail_fullname', 'detail fullname', 'trim|required');
	$this->form_validation->set_rules('detail_phone', 'detail phone', 'trim|required');
	$this->form_validation->set_rules('detail_email', 'detail email', 'trim|required');
	$this->form_validation->set_rules('detail_address', 'detail address', 'trim|required');
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');

	$this->form_validation->set_rules('detail_id', 'detail_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file User_detail.php */
/* Location: ./application/controllers/User_detail.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-14 15:42:53 */
/* http://harviacode.com */