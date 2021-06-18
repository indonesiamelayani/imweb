<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bankdata extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    if ($_SESSION['username'] == null) redirect(base_url('login'));
  }
  public function index()
  {
    $data['bankdata']    = $this->getListBankdata();
    $data['content']    = 'bankdata';
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
  function getListBankdata()
  {
    $table   = 'bankdata';
    $orderby = 'created_date';
    return $this->MY_Model->getListDataOrderby($table, $orderby);
  }
  function tambah()
  {
    $judul      = $this->input->post('judul');
    $link      = $this->input->post('link');
    $user       = $_SESSION['username'];
    $now        = date('Y-m-d H:i:s');
    $table      = 'bankdata';
    $filename   = implode("|", $_FILES['file']['name']);
    $temp       = implode("|", $_FILES['file']['tmp_name']);
    $location   = "files/";

    //check agar tidak terjadi duplikasi file
    $check      = $this->MY_Model->check('bankdata', array('image' => $filename));
    if ($check == FALSE) {
      $form_data  = array(
        'judul'         => $judul,
        'link'         => $link,
        'created_date'  => $now,
        'created_by'    => $user,
        'image'         => $filename
      );

      move_uploaded_file($temp, $location . $filename);
      $this->MY_Model->tambah($form_data, $table);
      redirect('admin/bankdata/index');
    } else {
      echo "file sudah ada";
    }
  }
  function edit()
  {
    $id         = $this->input->post('id_bankdata');
    $judul      = $this->input->post('judul');
    $link      = $this->input->post('link');
    $now        = date('Y-m-d H:i:s');
    $table      = 'bankdata';
    $filename   = implode("|", $_FILES['file']['name']);
    $temp       = implode("|", $_FILES['file']['tmp_name']);
    $location   = "files/";

    if ($filename == null) {
      $form_data  = array(
        'judul'         => $judul,
        'link'         => $link,
        'last_update'   => $now
      );
    } else {
      $form_data  = array(
        'judul'         => $judul,
        'link'         => $link,
        'last_update'   => $now,
        'image'         => $filename
      );
      move_uploaded_file($temp, $location . $filename);
    }
    // var_dump($form_data);
    // die();
    $where      = array('id_bankdata' => $id);
    $this->MY_Model->update($form_data, $where, $table);
    redirect('admin/bankdata/index');
  }
  function hapus() #hard delete/clean delete
  {
    $id     = $this->input->post('id_bankdata');
    $where  = array('id_bankdata' => $id);
    $table  = 'bankdata';
    $this->MY_Model->hapus($where, $table);
    redirect('admin/bankdata/index');
  }
}
