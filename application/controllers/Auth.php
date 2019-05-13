<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
    }
    
    public function index(){
        //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if($this->session->userdata('user')){
            redirect('dasboard');
        }
        else{
             $this->load->view('auth/login');
        }

    }

    public function cheklogin(){
            //load session library
            $this->load->library('session');
     
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = password_hash($password,PASSWORD_DEFAULT);
     
            $data = $this->user_model->login($username, $password);
     
            if($data){
                $this->session->set_userdata('user', $data);
                redirect('dasboard');
            }
            else{
                header('location:'.base_url().$this->index());
                $this->session->set_flashdata('error','Invalid login. User not found');
            } 
        }


    public function dashboard(){
        //load session library
        $this->load->library('session');
 
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $this->load->view('home');
        }
        else{
            redirect('/');
        }
 
    }

    function logout(){
        //load session library
        $this->load->library('session');

        $this->session->sess_destroy();
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('status_login','Logout Succes');
        redirect('auth/login');
    }
}
