<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    if ($_SESSION['username'] == null) redirect(base_url('login'));
  }
  public function index()
  {
    $data['pengaturan']    = $this->getListPengaturan();
    $data['content']    = 'pengaturan';
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
  function getListPengaturan()
  {
    $table   = 'pengaturan';
    $orderby = 'updated';
    return $this->MY_Model->getListDataOrderby($table, $orderby);
  }
  function tambah()
  {
    $judul      = $this->input->post('judul');
    $deskripsi      = $this->input->post('deskripsi');
    $user       = $_SESSION['username'];
    $now        = date('Y-m-d H:i:s');
    $table      = 'pengaturan';

    //check agar tidak terjadi duplikasi file
      $form_data  = array(
        'judul'         => $judul,
        'deskripsi'         => $deskripsi,
        'updated'  => $now,
        'created_by'    => $user
      );
      $this->MY_Model->tambah($form_data, $table);
      redirect('admin/pengaturan/index');
    }
  
  function edit()
  {
    $id         = $this->input->post('id');
    $judul      = $this->input->post('judul');
    $deskripsi      = $this->input->post('deskripsi');
    $now        = date('Y-m-d H:i:s');
    $table      = 'pengaturan';

      $form_data  = array(
        'judul'         => $judul,
        'deskripsi'         => $deskripsi,
        'updated'   => $now
      );
    $where      = array('id' => $id);
    $this->MY_Model->update($form_data, $where, $table);
    redirect('admin/pengaturan/index');
  }
  function hapus() #hard delete/clean delete
  {
    $id     = $this->input->post('id');
    $where  = array('id' => $id);
    $table  = 'pengaturan';
    $this->MY_Model->hapus($where, $table);
    redirect('admin/pengaturan/index');
  }
}
