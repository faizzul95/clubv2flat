<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contactus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Contactus_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('contactus/contactus_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Contactus_model->json();
    }

    public function read($id) 
    {
        $row = $this->Contactus_model->get_by_id($id);
        if ($row) {
            $data = array(
		'contact_id' => $row->contact_id,
		'contact_name' => $row->contact_name,
		'contact_email' => $row->contact_email,
		'contact_comment' => $row->contact_comment,
		'contact_date_issue' => $row->contact_date_issue,
	    );
            $this->load->view('contactus/contactus_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contactus'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('contactus/create_action'),
	    'contact_id' => set_value('contact_id'),
	    'contact_name' => set_value('contact_name'),
	    'contact_email' => set_value('contact_email'),
	    'contact_comment' => set_value('contact_comment'),
	    'contact_date_issue' => set_value('contact_date_issue'),
	);
        $this->load->view('contactus/contactus_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'contact_name' => $this->input->post('contact_name',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'contact_comment' => $this->input->post('contact_comment',TRUE),
		'contact_date_issue' => $this->input->post('contact_date_issue',TRUE),
	    );

            $this->Contactus_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('contactus'));
        }
    }

    public function update($id) 
    {
        $row = $this->Contactus_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('contactus/update_action'),
		'contact_id' => set_value('contact_id', $row->contact_id),
		'contact_name' => set_value('contact_name', $row->contact_name),
		'contact_email' => set_value('contact_email', $row->contact_email),
		'contact_comment' => set_value('contact_comment', $row->contact_comment),
		'contact_date_issue' => set_value('contact_date_issue', $row->contact_date_issue),
	    );
            $this->load->view('contactus/contactus_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contactus'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('contact_id', TRUE));
        } else {
            $data = array(
		'contact_name' => $this->input->post('contact_name',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'contact_comment' => $this->input->post('contact_comment',TRUE),
		'contact_date_issue' => $this->input->post('contact_date_issue',TRUE),
	    );

            $this->Contactus_model->update($this->input->post('contact_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('contactus'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Contactus_model->get_by_id($id);

        if ($row) {
            $this->Contactus_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('contactus'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contactus'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('contact_name', 'contact name', 'trim|required');
	$this->form_validation->set_rules('contact_email', 'contact email', 'trim|required');
	$this->form_validation->set_rules('contact_comment', 'contact comment', 'trim|required');
	$this->form_validation->set_rules('contact_date_issue', 'contact date issue', 'trim|required');

	$this->form_validation->set_rules('contact_id', 'contact_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "contactus.xls";
        $judul = "contactus";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Contact Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Contact Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Contact Comment");
	xlsWriteLabel($tablehead, $kolomhead++, "Contact Date Issue");

	foreach ($this->Contactus_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contact_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contact_email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contact_comment);
	    xlsWriteLabel($tablebody, $kolombody++, $data->contact_date_issue);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=contactus.doc");

        $data = array(
            'contactus_data' => $this->Contactus_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('contactus/contactus_doc',$data);
    }

}

/* End of file Contactus.php */
/* Location: ./application/controllers/Contactus.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-13 04:54:26 */
/* http://harviacode.com */