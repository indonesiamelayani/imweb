<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bankdata extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    $this->load->library('common_variable');
  }
  public function index()
  {
    $data['bankdata']     = $this->getBankdata();
    $data['info_judul'] = $this->getInfoJudul();
    $id_judul = $this->getInfoJudul()->id_judul;
    $data['info_opsi']  = $this->getInfoOpsi($id_judul);
    $data['poll1']      = $this->getListPolling();
    $data['poll1_opsi'] = $this->getInfoOpsi($data['poll1']->id);
    $data['poll2']      = $this->getListPolling($data['poll1']->id);
    $data['poll2_opsi'] = $this->getInfoOpsi($data['poll2']->id);
    $data['content']    = 'result_poll';
    $data['content']    = 'public/bankdata';
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
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
  function getBankdata()
  {
    $table  = 'bankdata';
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
