<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
	    parent::__construct();

	    $this->load->library('session');
	    if($this->session->userdata('logged_in') !== TRUE){
	      redirect('auth');
	    }
	  }
	 function index()
	{
		$this->load->view('dashboard');
	}

	
}