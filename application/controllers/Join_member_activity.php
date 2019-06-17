<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Join_member_activity extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Join_member_activity_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        check_login();
        $this->template->load('template','join_member_activity/join_member_activity_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Join_member_activity_model->json();
    }

    public function read($id) 
    {
        $row = $this->Join_member_activity_model->get_by_id($id);
        if ($row) {
            $data = array(
		'member_activity_id' => $row->member_activity_id,
		'act_id' => $row->act_id,
		'act_name' => $row->act_name,
		'join_date' => $row->join_date,
		'join_status' => $row->join_status,
	    );
        $this->template->load('template','join_member_activity/join_member_activity_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('join_member_activity'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('join_member_activity/create_action'),
	    'member_activity_id' => set_value('member_activity_id'),
	    'act_id' => set_value('act_id'),
	    'user_id' => set_value('user_id'),
	    'join_date' => set_value('join_date'),
	    'join_status' => set_value('join_status'),
	);
       
        $this->template->load('template','join_member_activity/join_member_activity_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'act_id' => $this->input->post('act_id',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'join_date' => $this->input->post('join_date',TRUE),
		'join_status' => $this->input->post('join_status',TRUE),
	    );

            $this->Join_member_activity_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('join_member_activity'));
        }
    }

    public function update($id) 
    {
        $row = $this->Join_member_activity_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('join_member_activity/update_action'),
		'member_activity_id' => set_value('member_activity_id', $row->member_activity_id),
		'act_id' => set_value('act_id', $row->act_id),
		'user_id' => set_value('user_id', $row->user_id),
		'join_date' => set_value('join_date', $row->join_date),
		'join_status' => set_value('join_status', $row->join_status),
	    );
             $this->template->load('template','join_member_activity/join_member_activity_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('join_member_activity'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('member_activity_id', TRUE));
        } else {
            $data = array(
		'act_id' => $this->input->post('act_id',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'join_date' => $this->input->post('join_date',TRUE),
		'join_status' => $this->input->post('join_status',TRUE),
	    );

            $this->Join_member_activity_model->update($this->input->post('member_activity_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('join_member_activity'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Join_member_activity_model->get_by_id($id);

        if ($row) {
            $this->Join_member_activity_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('join_member_activity'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('join_member_activity'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('act_id', 'act id', 'trim|required');
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('join_date', 'join date', 'trim|required');
	$this->form_validation->set_rules('join_status', 'join status', 'trim|required');

	$this->form_validation->set_rules('member_activity_id', 'member_activity_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "join_member_activity.xls";
        $judul = "join_member_activity";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Act Id");
	xlsWriteLabel($tablehead, $kolomhead++, "User Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Join Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Join Status");

	foreach ($this->Join_member_activity_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->act_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->join_date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->join_status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=join_member_activity.doc");

        $data = array(
            'join_member_activity_data' => $this->Join_member_activity_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('join_member_activity/join_member_activity_doc',$data);
    }

     // approve application
    public function approve_request($id) 
    {

        // get user id from table application
        $row = $this->Join_member_activity_model->get_by_id($id);
        if ($row) {
            $member_activity_id = $row->member_activity_id;
        }

        $statusjoin =  "'approve'";
        $dateeval =  date('Y-m-d');
         // update table application
        $this->db->set('join_status', $statusjoin, FALSE);
        $this->db->set('join_date', $dateeval);
        $this->db->where('member_activity_id', $member_activity_id);
        $this->db->update('join_member_activity');

        redirect(site_url('Join_member_activity'));
    }

        // reject application
    public function reject_request($id) 
    {

        $row = $this->Join_member_activity_model->get_by_id($id);
        if ($row) {
            $member_activity_id = $row->member_activity_id;
        }

        $statusjoin =  "'reject'";
        $dateeval =  date('Y-m-d');
         // update table application
        $this->db->set('join_status', $statusjoin, FALSE);
        $this->db->set('join_date', $dateeval);
        $this->db->where('member_activity_id', $member_activity_id);
        $this->db->update('join_member_activity');

        redirect(site_url('Join_member_activity'));
    }

    
}