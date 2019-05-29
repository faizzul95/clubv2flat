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
        check_login();
        $this->template->load('template','application/application_list');
    } 

    public function newlist()
    {
        // $this->load->view('application/application_newlist');
        $this->template->load('template','application/application_newlist');
    } 

    public function disapprove()
    {
        $this->template->load('template','application/application_rejectlist');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Application_model->json();
    }

    // new application
    public function newapp() {
        header('Content-Type: application/newapp');
        echo $this->Application_model->newapp();
    }

    // new application
    public function rejectapp() {
        header('Content-Type: application/newapp');
        echo $this->Application_model->rejectapp();
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
            $this->template->load('template','application/application_read', $data);
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
        $this->template->load('template','application/application_create_form', $data);
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
            $this->template->load('template','application/application_form', $data);
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
        // get user id from table application
        $row = $this->Application_model->get_by_id($id);

        if ($row) {
            $userid = $row->user_id;
            // $this->Application_model->delete($id);
            $this->Application_model->deleteUser($userid);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('application'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('application'));
        }
    }

    // approve application
    public function approve($id) 
    {

        // get user id from table application
        $row = $this->Application_model->get_by_id($id);
        if ($row) {
            $userid = $row->user_id;
        }

        $statususer =  "'active'";
         // update table application
        $this->db->set('usr_status', $statususer, FALSE);
        $this->db->where('user_id', $userid);
        $this->db->update('user');

        $statusapplication =  "'approve'";
        $dateeval =  date('Y-m-d');

        // update table application
        $this->db->set('application_status', $statusapplication, FALSE);
        $this->db->set('application_evaluate_date', 'NOW()', FALSE);
        $this->db->where('app_id', $id);
        $this->db->update('application');

        redirect(site_url('application/newlist'));
    }

    public function reapprove($id) 
    {

        // get user id from table application
        $row = $this->Application_model->get_by_id($id);
        if ($row) {
            $userid = $row->user_id;
        }

        $statususer =  "'active'";
         // update table application
        $this->db->set('usr_status', $statususer, FALSE);
        $this->db->where('user_id', $userid);
        $this->db->update('user');

        $statusapplication =  "'approve'";
        $dateeval =  date('Y-m-d');

        // update table application
        $this->db->set('application_status', $statusapplication, FALSE);
        $this->db->set('application_evaluate_date', 'NOW()', FALSE);
        $this->db->where('app_id', $id);
        $this->db->update('application');

        redirect(site_url('application/disapprove'));
    }

     public function checkApp(){
        $checkApp  = $this->input->post('checkApp',TRUE);
        $validate = $this->Application_model->validate($checkApp);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $application_status  = $data['application_status'];
            $user_id  = $data['user_id'];

            if ($application_status == "approve") {
                $this->session->set_flashdata('message', 'Your application have been approve.');
                redirect(site_url('welcome'));
            }elseif ($application_status == "reject") {
                $this->session->set_flashdata('message', 'Your application has been rejected by admin.');
                redirect(site_url('welcome'));
            }elseif ($application_status == "pending") {
                $this->session->set_flashdata('message', 'Your application still in process.');
                redirect(site_url('welcome'));
            }
        }else{
            $this->session->set_flashdata('msg_alert_notfound','Application ID not found');
            redirect(site_url('welcome'));
        }
    }

    // reject application
    public function reject($id) 
    {
        $data =  "'reject'";

        $this->db->set('application_status', $data, FALSE);
        $this->db->set('application_evaluate_date', 'NOW()', FALSE);
        $this->db->where('app_id', $id);
        $this->db->update('application');
        redirect(site_url('application/newlist'));
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
