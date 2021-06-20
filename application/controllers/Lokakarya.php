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
    $data['poll1']      = $this->getListPolling();
    $data['poll1_opsi'] = $this->getInfoOpsi($data['poll1']->id);
    $data['poll2']      = $this->getListPolling($data['poll1']->id);
    $data['poll2_opsi'] = $this->getInfoOpsi($data['poll2']->id);
    $data['content']    = 'result_poll';
    $data['iklan']    = $this->getIklan();
    $data['iklan_active']    = $this->getIklanActive();
    $data['content']    = 'public/lokakarya';
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
  }
  function getIklanActive()
  {
    $table  = 'iklan';
    $orderby    = 'created_date';
    return $this->MY_Model->singleOrderbyDESC($table, $orderby);
  }
  function getIklan()
  {
    $table  = 'iklan';
    return $this->MY_Model->getListData($table);
  }
  function getListPolling($id1 = null)
  {
    $table   = 'polling';
    $orderby = 'id';
    if ($id1 == null) {
      $where  = array('is_judul' => 1, 'expired_date' => null);
    } else {
      $where  = array('is_judul' => 1, 'expired_date' => null, 'id !=' => $id1);
    }
    return $this->MY_Model->getMaxListWhereOrderbyDESC('*', $table, $where, $orderby);
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
