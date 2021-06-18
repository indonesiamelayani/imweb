<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokakarya extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    $this->load->library('common_variable');
  }
  public function index()
  {
    $data['galeri']     = $this->getGaleri();
    $data['info_judul'] = $this->getInfoJudul();
    $id_judul = $this->getInfoJudul()->id_judul;
    $data['info_opsi']  = $this->getInfoOpsi($id_judul);
    $data['content']    = 'result_poll';
    $data['content']    = 'public/lokakarya';
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
  }
  function getGaleri()
  {
    $table  = 'galeri';
    return $this->MY_Model->getListData($table);
  }

  function getInfoJudul()
  {
    return $this->db->select('*')->from('polling')->order_by('created_date')->limit(1)->get()->row();
  }
  function getInfoOpsi($id_judul)
  {
    $where = array('id_judul' => $id_judul);
    return $this->MY_Model->getList('polling', $where);
  }
}
