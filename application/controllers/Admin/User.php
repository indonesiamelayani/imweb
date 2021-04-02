<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
    }
    public function index()
    {
        $table              = 'user';
        $where              = array('expired_date' => null);
        $orderby            = 'id';
        $data['user']       = $this->MY_Model->getListOrderby($table, $where, $orderby);
        $data['content']    = 'user';
        $this->load->view('templates/default', $data); ////asd
    }
    function tambah()
    {
        //deklarasi && inisialisasi
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $email      = $this->input->post('email');
        $password   = password_hash($this->input->post('password'), PASSWORD_BCRYPT, array('cost' => 10));
        $role       = $this->input->post('role');

        //input variable to array and prepare to transaction
        $form_data = array(
            'nama'      => $nama,
            'username'  => $username,
            'email'     => $email,
            'password'  => $password,
            'role'      => $role,
        );
        $table = 'user';

        $this->MY_Model->tambah($form_data, $table);
        redirect('admin/user/index');
        // var_dump($file);
        // echo $file;
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
}
