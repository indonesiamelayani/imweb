<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iklan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    if ($_SESSION['username'] == null) redirect(base_url('login'));
  }
  public function index()
  {
    $data['iklan']    = $this->getListIklan();
    $data['content']    = 'iklan';
    $this->load->view('templates/default', $data); ////asd
  }

  function getListIklan()
  {
    $table   = 'iklan';
    $orderby = 'created_date';
    return $this->MY_Model->getListDataOrderby($table, $orderby);
  }
  function tambah()
  {
    $judul      = $this->input->post('judul');
    $user       = $_SESSION['username'];
    $now        = date('Y-m-d H:i:s');
    $table      = 'iklan';
    $filename   = implode("|", $_FILES['file']['name']);
    $temp       = implode("|", $_FILES['file']['tmp_name']);
    $location   = "files/";

    //check agar tidak terjadi duplikasi file
    $check      = $this->MY_Model->check('iklan', array('image' => $filename));
    if ($check == FALSE) {
      $form_data  = array(
        'judul'         => $judul,
        'created_date'  => $now,
        'created_by'    => $user,
        'image'         => $filename
      );

      move_uploaded_file($temp, $location . $filename);
      $this->MY_Model->tambah($form_data, $table);
      redirect('admin/iklan/index');
    } else {
      echo "file sudah ada";
    }
  }
  function edit()
  {
    $id         = $this->input->post('id_iklan');
    $judul      = $this->input->post('judul');
    $now        = date('Y-m-d H:i:s');
    $table      = 'iklan';
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
    $where      = array('id_iklan' => $id);
    $this->MY_Model->update($form_data, $where, $table);
    redirect('admin/iklan/index');
  }
  function hapus() #hard delete/clean delete
  {
    $id     = $this->input->post('id_iklan');
    $where  = array('id_iklan' => $id);
    $table  = 'iklan';
    $this->MY_Model->hapus($where, $table);
    redirect('admin/iklan/index');
  }
}
