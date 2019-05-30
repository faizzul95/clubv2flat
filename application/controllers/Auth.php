<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('User_detail_model');
        $this->load->model('Application_model');
        $this->load->library('session');
    }
    
    public function index(){
        //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if($this->session->userdata('userid')){
            redirect('dashboard');
        }
        else{
             $this->load->view('auth/login');
        }

    }

    public function register(){
         //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if($this->session->userdata('userid')){
            redirect('dasboard');
        }
        else{
             $this->load->view('auth/register');
        }
    }

    public function cheklogin(){
        $username  = $this->input->post('username',TRUE);
        $enteredPassword = $this->input->post('password');

        if ($username == "superadmin"){
            $superadmin_password = '$2y$12$RnnqyKXEV4mpSAvu4FG4wu3ktFxe0SHcmph0aMLGNBTlFp6WyR5k.';
             if (password_verify($enteredPassword, $superadmin_password)) { 
                    
                    $fname = "Super Admin";
                    $email = "superadmin@system.com";
                    $id = "10";
                    $name = "Fahmy";
                    $level = "superadmin";
                    $status = "active";

                    $sesdata = array(
                        'userfname'  => $fname,
                        'useremail'  => $email,
                        'userid'  => $id,
                        'username'=> $name,
                        'level'=> $level,
                        'status'=> $status,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sesdata);
                    redirect('dashboard'); 
            }else{
                echo $this->session->set_flashdata('msg','Password for superadmin is incorrect');
                redirect('auth');
            }
        }else{
            $validate = $this->User_model->validate($username);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $id  = $data['user_id'];
                $name  = $data['usr_username'];
                $current_password = $data['usr_password'];
                $level = $data['usr_role'];
                $status = $data['usr_status'];

                $detailUser = $this->User_detail_model->get_session_data($id);
                $row  = $detailUser->row_array();
                $fname = $row['detail_fullname'];
                $email = $row['detail_email'];

                if (password_verify($enteredPassword, $current_password)) { 
                        if ($status == "active") {
                            $sesdata = array(
                            'userfname'  => $fname,
                            'useremail'  => $email,
                            'userid'  => $id,
                            'username'=> $name,
                            'level'=> $level,
                            'status'=> $status,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($sesdata);
                        // access login for admin
                        redirect('dashboard'); 
                        }elseif($status == "pending"){
                            echo $this->session->set_flashdata('msg','Your application still in process');
                            redirect('auth');
                        }elseif($status == "inactive"){
                            echo $this->session->set_flashdata('msg','Your ID is inactive, Please contact administrator');
                        }else{
                              redirect('auth');
                        }
                }else{
                    echo $this->session->set_flashdata('msg','Wrong Password');
                    redirect('auth');
                }
            }else{
                echo $this->session->set_flashdata('msg','Username not found');
                redirect('auth');
            }
        }
    }

    public function register_application(){
        
        // user
        $enterpassword = $this->input->post('password',TRUE);
        $hashpassword = password_hash($enterpassword,PASSWORD_DEFAULT);

        $checkAdmin = "admin";

        $query = $this->db->query('SELECT * FROM user WHERE usr_role ="admin"');
        if($query->num_rows() > 0) {
             $user = array(
                'usr_username' => $this->input->post('username',TRUE),
                'usr_password' => $hashpassword,
                'usr_role' => 'member',
                'usr_status' => 'pending'
              );
            $this->User_model->insert($user);
        }else{
             $user = array(
                'usr_username' => $this->input->post('username',TRUE),
                'usr_password' => $hashpassword,
                'usr_role' => 'admin',
                'usr_status' => 'active'
            );
            $this->User_model->insert($user);
        }

        // get last id
        $last_id = $this->db->insert_id();

        // user detail
        $userdetail = array(
            'detail_fullname' => $this->input->post('detail_fullname',TRUE),
            'detail_phone' => $this->input->post('detail_phone',TRUE),
            'detail_email' => $this->input->post('detail_email',TRUE),
            'detail_address' => $this->input->post('detail_address',TRUE),
            'user_id' => $last_id
          );
        $this->User_detail_model->insert($userdetail);

        // generate application ID
        $maxDigit=5; //maximum digit of ur number
        $count=strlen($last_id);
        $numZero = "";
        for($count;$count<=$maxDigit;$count++){
             $numZero=$numZero."0";
        }
        $application_id="CM".$numZero.$last_id;

        // application
        $application_date =  date('Y-m-d');

        $application = array(
            'application_id' => $application_id,
            'user_id' => $last_id,
            'application_date' => $application_date,
            'application_status' => 'pending'
          );
        $this->Application_model->insert($application);

        echo $this->session->set_flashdata('msg','Register success,<br> Please remember your application ID : <font color="blue"><b>'.$application_id.'</b></font>');
                redirect('auth/register');       
    }

    function logout(){
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata($sesdata);
        $this->session->sess_destroy();
        redirect('auth');
    }
}
