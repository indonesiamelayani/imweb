<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $table              = 'user';
        $where              = array('expired_date' => null);
        $orderby            = 'id';
        $data['user']       = $this->MY_Model->getListOrderby($table, $where, $orderby);
        $data['content']    = 'user';
        $this->load->view('templates/default', $data); ////asd

        $this->MY_Model->insert_activity(current_url());
    }
    function tambah()
    {
        //deklarasi && inisialisasi
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $email      = $this->input->post('email');
        $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT, array('cost' => 10));
        $role       = $this->input->post('role');
        $filename   = implode("|", $_FILES['file']['name']);
        $temp       = implode("|", $_FILES['file']['tmp_name']);
        $location   = "files/";

        //check agar tidak terjadi duplikasi file
        $check      = $this->MY_Model->check('user', array('image' => $filename));

        if ($check == FALSE) {
            //input variable to array and prepare to transaction
            $form_data = array(
                'nama'      => $nama,
                'username'  => $username,
                'email'     => $email,
                'password'  => $password,
                'role'      => $role,
                'image'     => $filename,
            );
            $table = 'user';
            move_uploaded_file($temp, $location . $filename);

            $this->MY_Model->tambah($form_data, $table);
            redirect('admin/user/index');
        } else {
            echo "File sudah ada"; //nanti mau dibuat notif
        }
        $this->MY_Model->insert_activity(current_url());
    }
    function hapus()
    {
        $id         = $this->input->post('id');
        $now        = date('Y-m-d H:i:s');

        $form_data  = array('expired_date' => $now);
        $where      = array('id'           => $id);
        $table      = 'user';
        $this->MY_Model->update($form_data, $where, $table);
        redirect('admin/user/index');
    }

    function edit()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $email      = $this->input->post('email');
        $pw         = $this->input->post('password');
        if ($pw != null) {
            $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT, array('cost' => 10));
        } else {
            $password   = $this->input->post('password_old');
        }
        $role       = $this->input->post('role');
        if ($_FILES['file']['name'] == null) {
            $filename   = $this->input->post('file_old');
        } else {
            $filename   = implode("|", $_FILES['file']['name']);
            $temp       = implode("|", $_FILES['file']['tmp_name']);
            $location   = "files/";
        }
        $date       = date('Y-m-d H:i:s');

        $form_data = array(
            'nama'      => $nama,
            'username'  => $username,
            'email'     => $email,
            'password'  => $password,
            'role'      => $role,
            'image'     => $filename,
            'updated_date' => $date
        );
        $table = 'user';
        move_uploaded_file($temp, $location . $filename);
        $where      = array('id'           => $id);
        $this->MY_Model->update($form_data, $where, $table);
        redirect('admin/user/index');

        $this->MY_Model->insert_activity(current_url());
    }
}
