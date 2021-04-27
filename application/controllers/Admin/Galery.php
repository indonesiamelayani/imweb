<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['galeri']    = $this->getListGaleri();
        $data['content']    = 'galery';
        $this->load->view('templates/default', $data); ////asd
    }
    // function getCountKomentar()
    // {
    //     // $id_artikel = '';
    //     $table = 'artikel';
    //     // $where = array('id_artikel' => $id_artikel);
    //     $orderby = 'artikel.id_artikel';
    //     $destination = 'komentar';
    //     $join = '' . $destination . '.id_artikel=' . '' . $table . '.id_artikel';
    //     return $this->MY_Model->getListDataJoinOrderby($table, $orderby, $destination, $join);
    // }
    function getListGaleri()
    {
        $table   = 'galeri';
        $orderby = 'created_date';
        return $this->MY_Model->getListDataOrderby($table, $orderby);
    }
    function tambah()
    {
        $judul      = $this->input->post('judul');
        $user       = $_SESSION['username'];
        $now        = date('Y-m-d H:i:s');
        $table      = 'galeri';
        $filename   = implode("|", $_FILES['file']['name']);
        $temp       = implode("|", $_FILES['file']['tmp_name']);
        $location   = "files/";

        //check agar tidak terjadi duplikasi file
        $check      = $this->MY_Model->check('galeri', array('image' => $filename));
        if ($check == FALSE) {
            $form_data  = array(
                'judul'         => $judul,
                'created_date'  => $now,
                'created_by'    => $user,
                'image'         => $filename
            );

            move_uploaded_file($temp, $location . $filename);
            $this->MY_Model->tambah($form_data, $table);
            redirect('admin/galery/index');
        } else {
            echo "file sudah ada";
        }
    }
    function edit()
    {
        $id         = $this->input->post('id_galeri');
        $judul      = $this->input->post('judul');
        $now        = date('Y-m-d H:i:s');
        $table      = 'galeri';
        $filename   = implode("|", $_FILES['file']['name']);
        $temp       = implode("|", $_FILES['file']['tmp_name']);
        $location   = "files/";

        if ($filename == null) {
            $form_data  = array(
                'judul'         => $judul,
                'last_update'   => $now
            );
        } else {
            $form_data  = array(
                'judul'         => $judul,
                'last_update'   => $now,
                'image'         => $filename
            );
            move_uploaded_file($temp, $location . $filename);
        }
        // var_dump($form_data);
        // die();
        $where      = array('id_galeri' => $id);
        $this->MY_Model->update($form_data, $where, $table);
        redirect('admin/galery/index');
    }
    function hapus() #hard delete/clean delete
    {
        $id     = $this->input->post('id_galeri');
        $where  = array('id_galeri' => $id);
        $table  = 'galeri';
        $this->MY_Model->hapus($where, $table);
        redirect('admin/galery/index');
    }
}
