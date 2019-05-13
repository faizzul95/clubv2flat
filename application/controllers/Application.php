<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Application extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Application_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('application/application_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Application_model->json();
    }

    public function read($id) 
    {
        $row = $this->Application_model->get_by_id($id);
        if ($row) {
            $data = array(
		'app_id' => $row->app_id,
		'application_id' => $row->application_id,
		'user_id' => $row->user_id,
		'application_date' => $row->application_date,
		'application_evaluate_date' => $row->application_evaluate_date,
		'application_status' => $row->application_status,
	    );
            $this->load->view('application/application_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('application'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('application/create_action'),
	    'app_id' => set_value('app_id'),
	    'application_id' => set_value('application_id'),
	    'user_id' => set_value('user_id'),
	    'application_date' => set_value('application_date'),
	    'application_evaluate_date' => set_value('application_evaluate_date'),
	    'application_status' => set_value('application_status'),
	);
        $this->load->view('application/application_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'application_id' => $this->input->post('application_id',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'application_date' => $this->input->post('application_date',TRUE),
		'application_evaluate_date' => $this->input->post('application_evaluate_date',TRUE),
		'application_status' => $this->input->post('application_status',TRUE),
	    );

            $this->Application_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('application'));
        }
    }

    public function update($id) 
    {
        $row = $this->Application_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('application/update_action'),
		'app_id' => set_value('app_id', $row->app_id),
		'application_id' => set_value('application_id', $row->application_id),
		'user_id' => set_value('user_id', $row->user_id),
		'application_date' => set_value('application_date', $row->application_date),
		'application_evaluate_date' => set_value('application_evaluate_date', $row->application_evaluate_date),
		'application_status' => set_value('application_status', $row->application_status),
	    );
            $this->load->view('application/application_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('application'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('app_id', TRUE));
        } else {
            $data = array(
		'application_id' => $this->input->post('application_id',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'application_date' => $this->input->post('application_date',TRUE),
		'application_evaluate_date' => $this->input->post('application_evaluate_date',TRUE),
		'application_status' => $this->input->post('application_status',TRUE),
	    );

            $this->Application_model->update($this->input->post('app_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('application'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Application_model->get_by_id($id);

        if ($row) {
            $this->Application_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('application'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('application'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('application_id', 'application id', 'trim|required');
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('application_date', 'application date', 'trim|required');
	$this->form_validation->set_rules('application_evaluate_date', 'application evaluate date', 'trim|required');
	$this->form_validation->set_rules('application_status', 'application status', 'trim|required');

	$this->form_validation->set_rules('app_id', 'app_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "application.xls";
        $judul = "application";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Application Id");
	xlsWriteLabel($tablehead, $kolomhead++, "User Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Application Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Application Evaluate Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Application Status");

	foreach ($this->Application_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->application_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->application_date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->application_evaluate_date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->application_status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=application.doc");

        $data = array(
            'application_data' => $this->Application_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('application/application_doc',$data);
    }

}

/* End of file Application.php */
/* Location: ./application/controllers/Application.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-13 08:36:14 */
/* http://harviacode.com */