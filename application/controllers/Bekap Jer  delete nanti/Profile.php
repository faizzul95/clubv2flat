<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	 function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_detail_model');
    }
    
	public function index()
	{
        check_login();

		$userID = $this->session->userdata('userid');
		$row = $this->User_detail_model->get_by_id($userID);
        if ($row) {
            $data = array(
            'detail_id' => $row->detail_id,
    		'detail_fullname' => $row->detail_fullname,
    		'detail_phone' => $row->detail_phone,
    		'detail_email' => $row->detail_email,
    		'detail_address' => $row->detail_address,
    		'user_id' => $row->user_id,
	    );
          // $this->load->view('user_profile', $data);
          $this->template->load('template','user_profile', $data);
	}
}

}