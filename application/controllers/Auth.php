<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function index(){
        //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if($this->session->userdata('userid')){
            redirect('dasboard');
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
        $enterpassword = $this->input->post('password',TRUE);
        $password = password_hash($enterpassword,PASSWORD_DEFAULT);
        $validate = $this->user_model->validate($username);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $id  = $data['user_id'];
            $name  = $data['usr_username'];
            $dbpassword = $data['usr_password'];
            $level = $data['usr_role'];
            $status = $data['usr_status'];

            if (password_verify($enterpassword, $dbpassword)) { 
                    if ($status == "active") {
                        $sesdata = array(
                        'userid'  => $id,
                        'username'=> $name,
                        'level'=> $level,
                        'level'=> $level,
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
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('auth');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('auth');
        }
    }

    public function register_application(){
        $fullname  = $this->input->post('fullname',TRUE);
        $phoneno  = $this->input->post('phoneno',TRUE);
        $address  = $this->input->post('address',TRUE);
        $username  = $this->input->post('username',TRUE);
        // $username  = $this->input->post('username',TRUE);
        // $enterpassword = $this->input->post('password',TRUE);
        // $password = password_hash($enterpassword,PASSWORD_DEFAULT);

         echo $this->session->set_flashdata('msg','Error Occur');
                redirect('auth/register');

      //   $username=mysqli_real_escape_string($myConnection, $_POST['usr_username']);
      //    $password = mysqli_real_escape_string($myConnection, $_POST['usr_password']);

      //    //detail
      //    $detail_fullname = mysqli_real_escape_string($myConnection, $_POST['detail_fullname']);
      //    $detail_phone=mysqli_real_escape_string($myConnection, $_POST['detail_phone']);
      //    $detail_address = mysqli_real_escape_string($myConnection, $_POST['detail_address']);
      //  $detail_email = mysqli_real_escape_string($myConnection, $_POST['detail_email']);

      //    $role = "member";
      //    $status = "pending";
      //    $application_date=mysqli_real_escape_string($myConnection, date('Y-m-d'));
         
      //  // encrypt password
      //  $password = password_hash($password, PASSWORD_DEFAULT);

      //   $checkAdmin = "admin";

      //   $check_admin = mysqli_query($myConnection, "SELECT * FROM `user` WHERE `usr_role` = '$checkAdmin'");
      //   $check_ic = mysqli_query($myConnection, "SELECT * FROM `user` WHERE `usr_username` = '$username'");
      //   if(mysqli_num_rows($check_ic) > 0){
      //       echo ("<SCRIPT LANGUAGE='JavaScript'>
      //       window.alert('Registration failed, ID already exist')
      //       window.location = 'login.php';
      //           </SCRIPT>");
      //   }else if(mysqli_num_rows($check_admin) == 0){

      //     $adminID = "0";
      //     $roleAdmin = "admin";
      //     $statusAdmin = "active";

      //     // users
      //     $query_admin = "INSERT INTO `user` 
      //       (`user_id`,`usr_username`,`usr_password`,`usr_role`,`usr_status`)
      //        VALUES 
      //       ('$adminID','$username','$password','$roleAdmin','$statusAdmin')";
      //     $result = mysqli_query($myConnection, $query_admin) or die(mysqli_error($myConnection));

      //     $last_id = mysqli_insert_id($myConnection);

      //      // datail 
      //       $sql2= "INSERT INTO `user_detail` (`detail_fullname`, `detail_phone`, `detail_email`, `detail_address`, `user_id`) VALUES ('$detail_fullname', '$detail_phone', '$detail_email', '$detail_address', '$last_id')";
      //       $result2 = mysqli_query($myConnection, $sql2) or die(mysqli_error($myConnection));

      //        if($result2)
      //         {
      //             echo ("<SCRIPT LANGUAGE='JavaScript'>
      //             window.alert('Admin Register')
      //             window.location = 'login.php?result=SuccessfullyRegister';
      //             </SCRIPT>");
      //         }

      //   }else{

      //     $query_member = "INSERT INTO `user` 
      //       (`usr_username`,`usr_password`,`usr_role`,`usr_status`)
      //        VALUES 
      //       ('$username','$password','$role','$status')";
      //     $result = mysqli_query($myConnection, $query_member) or die(mysqli_error($myConnection));

      //     $last_id = mysqli_insert_id($myConnection);

      //     // generate application ID
      //     $maxDigit=5; //maximum digit of ur number
      //     $count=strlen($last_id);
      //     $numZero = "";
      //     for($count;$count<=$maxDigit;$count++){
      //          $numZero=$numZero."0";
      //     }

      //     $application_id="CM".$numZero.$last_id;


      //     // application
      //     $sql2= "INSERT INTO `application` (`application_id`, `user_id`, `application_date`, `application_status`) VALUES ('$application_id', '$last_id' , '$application_date', '$status')";
      //     $result2 = mysqli_query($myConnection, $sql2) or die(mysqli_error($myConnection));

      //     // datail 
      //     $sql3= "INSERT INTO `user_detail` (`detail_fullname`, `detail_phone`, `detail_email`, `detail_address`, `user_id`) VALUES ('$detail_fullname', '$detail_phone', '$detail_email', '$detail_address', '$last_id')";
      //     $result3 = mysqli_query($myConnection, $sql3) or die(mysqli_error($myConnection));

      //     if($result3)
      //     {
      //         echo ("<SCRIPT LANGUAGE='JavaScript'>
      //         window.alert('Registration submit successfull, your application ID : $application_id')
      //         window.location = 'login.php?result=SuccessfullyRegister';
      //         </SCRIPT>");
      //     }
      //     else
      //     { 
      //         echo ("<SCRIPT LANGUAGE='JavaScript'>
      //         window.alert('Pendaftaran Tidak Berjaya')
      //         window.location = 'register.php';
      //         </SCRIPT>");
      //     }
      // }
        
    }


    function logout(){
        //load session library
        $this->load->library('session');

        $this->session->sess_destroy();
        redirect('auth');
    }
}
