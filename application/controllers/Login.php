<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('core/MY_Model');
    }
    public function index()
    {
        $this->load->view('login');
        $this->MY_Model->insert_activity(current_url());
    }
    
    function auth()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $check      = $this->MY_Model->singleData('user', array('username' => $username));
        
        
        if ($check == TRUE) {
            if (password_verify($password, $check->password)) {
                session_start();
                $_SESSION['username'] = $username;
                redirect('admin/user/index');
                die();
            } else {
                echo '<script language="javascript">
                        window.alert("LOGIN GAGAL! Silakan coba lagi");
                        window.location.href="./";
                    </script>';
            }
        } else {
            echo '<script language="javascript">
                        window.alert("Username tidak tersedia");
                        window.location.href="./";
                    </script>';
        }
    $this->MY_Model->insert_activity(current_url());
    }
}
