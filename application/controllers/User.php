<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('User_detail_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        check_login();
        $this->template->load('template','user/user_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        $row2 = $this->User_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
    		'user_id' => $row->user_id,
    		'usr_username' => $row->usr_username,
    		'usr_password' => $row->usr_password,
    		'usr_role' => $row->usr_role,
    		'usr_status' => $row->usr_status,
            'detail_fullname' => $row2->detail_fullname,
            'detail_phone' => $row2->detail_phone,
            'detail_email' => $row2->detail_email,
            'detail_address' => $row2->detail_address,
	    );
            $this->template->load('template','user/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
    	    'user_id' => set_value('user_id'),
    	    'usr_username' => set_value('usr_username'),
    	    'usr_password' => set_value('usr_password'),
    	    'usr_role' => set_value('usr_role'),
    	    'usr_status' => set_value('usr_status'),
	);
        $this->template->load('template','user/user_create_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
    		'usr_username' => $this->input->post('usr_username',TRUE),
    		'usr_password' => $this->input->post('usr_password',TRUE),
    		'usr_role' => $this->input->post('usr_role',TRUE),
    		'usr_status' => $this->input->post('usr_status',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }

    public function update($id) 
    {

        // $detailUser = $this->User_model->get_by_id($id);
        // $row  = $detailUser->row();
        $query = $this->db->query("SELECT * FROM user WHERE user_id = '$id'");
        $row = $query->row_array();
        $id = $row['user_id'];
        $status = $row['usr_status'];

        if($status === 'active')
        {
            $this->db->set('usr_status', 'inactive', true);
        }else{
            $this->db->set('usr_status', 'active', true);
        }

        $this->db->where('user_id', $id);
        $this->db->update('user');

        redirect(site_url('user'));

    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('user_id', TRUE));
        } else {
            $data = array(
    		'usr_username' => $this->input->post('usr_username',TRUE),
    		'usr_password' => $this->input->post('usr_password',TRUE),
    		'usr_role' => $this->input->post('usr_role',TRUE),
    		'usr_status' => $this->input->post('usr_status',TRUE),
	    );

             // user detail
            $userdetail = array(
                'detail_fullname' => $this->input->post('detail_fullname',TRUE),
                'detail_phone' => $this->input->post('detail_phone',TRUE),
                'detail_email' => $this->input->post('detail_email',TRUE),
                'detail_address' => $this->input->post('detail_address',TRUE)
              );

            $this->User_detail_model->update($this->input->post('user_id', TRUE), $userdetail);
            $this->User_model->update($this->input->post('user_id', TRUE), $data);

            $this->session->set_flashdata('message', 'Update Record Success');
            // redirect(site_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('usr_username', 'usr username', 'trim|required');
	$this->form_validation->set_rules('usr_password', 'usr password', 'trim|required');
	$this->form_validation->set_rules('usr_role', 'usr role', 'trim|required');
	$this->form_validation->set_rules('usr_status', 'usr status', 'trim|required');

	$this->form_validation->set_rules('user_id', 'user_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user.xls";
        $judul = "user";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "Usr Username");
    	xlsWriteLabel($tablehead, $kolomhead++, "Usr Password");
    	xlsWriteLabel($tablehead, $kolomhead++, "Usr Role");
    	xlsWriteLabel($tablehead, $kolomhead++, "Usr Status");

	foreach ($this->User_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->usr_username);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->usr_password);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->usr_role);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->usr_status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user.doc");

        $data = array(
            'user_data' => $this->User_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user/user_doc',$data);
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-14 10:30:58 */
/* http://harviacode.com */