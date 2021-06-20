<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public $table = 'artikel';
  public $kat   = ['Politik', 'Digilife', 'Pelayanan', 'Keamanan'];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    $this->load->helper('text');
  }

  public function index()
  {
    $data['data']       = $this->MY_Model->singleData('halaman', array('id' => 1));
    $data['baru']       = $this->getArtikelbaru();
    $data['desc']       = $this->getInfoDesc();
    // $data['info_aktif'] = $this->getInfografisActive();
    // $data['info']       = $this->getInfografis($data['info_aktif']->id_infografis);
    $data['politik']    = $this->getArtikelByKategori('Politik');
    $data['digilife']   = $this->getArtikelByKategori('Digilife');
    $data['pelayanan']  = $this->getArtikelByKategori('Pelayanan');
    $data['keamanan']   = $this->getArtikelByKategori('Keamanan');
    $data['besar']      = $this->getFavArtikel();
    $data['kanan']      = $this->getArtikelKanan($data['besar']->id_artikel);
    $data['poll1']      = $this->getListPolling();
    $data['poll1_opsi'] = $this->getInfoOpsi($data['poll1']->id);
    $data['poll2']      = $this->getListPolling($data['poll1']->id);
    $data['poll2_opsi'] = $this->getInfoOpsi($data['poll2']->id);
    $data['content']    = 'public/home';
    // var_dump($data['info_aktif']);
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
  }
  function pilih_polling()
  {
    $id_opsi    = $this->input->post('id_opsi1');
    $agent      = (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
    $ipaddr     = $this->libs->get_client_ip();
    $table      = 'result_polling';
    $form_data  = array(
      'agent'      => $agent,
      'ipaddr'     => $ipaddr,
      'id'         => $id_opsi,
      'date'       => $this->common_variable->getTimeNow()
    );
    $this->MY_Model->tambah($form_data, $table);

    $count      = $this->MY_Model->countDistinct('ipaddr', $table, array('id' => $id_opsi))->i;
    $form_data  = array('count' => $count);
    $where      = array('id' => $id_opsi);
    $this->MY_Model->update($form_data, $where, 'polling');
    redirect($_SERVER['HTTP_REFERER']);
  }
  function getInfoOpsi($id_judul)
  {
    $where = array('id_judul' => $id_judul);
    return $this->MY_Model->getList('polling', $where);
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
  public function show()
  {
    $id                 = $this->uri->segment(3);
    $data['utama']      = $this->getArtikel($id);
    $data['popular']    = $this->getArtikelPopular();
    $data['content']    = 'public/detail';
    // var_dump($data['popular']->result_array());
    $this->load->view('templates/public', $data);
    $this->save_history($id);
  }
  function getInfoDesc()
  {
    $table  = 'tentang';
    $id     = $this->common_variable->getIdDesc();
    $where  = array('id' => $id);
    return $this->MY_Model->singleData($table, $where);
  }
  function getInfografis($id_new)
  {
    $table  = 'infografis';
    $where = array('id_infografis !=' => $id_new);
    $orderby = 'created_date';
    return $this->MY_Model->getListOrderbyDESCLimit($table, $where, $orderby, 2);
  }
  function getInfografisActive()
  {
    $table  = 'infografis';
    $orderby    = 'created_date';
    return $this->MY_Model->singleOrderbyDESC($table, $orderby);
  }
  function save_history($id_artikel)
  {
    $userid     = isset($_SESSION['username']) ? trim($_SESSION['username']) : '';
    $agent      = (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
    $ipaddr     = $this->libs->get_client_ip();
    $table      = 'history_artikel';
    $form_data  = array(
      'agent'      => $agent,
      'ipaddr'     => $ipaddr,
      'id_artikel' => $id_artikel,
      'userid'     => $userid,
      'date'       => $this->common_variable->getTimeNow()
    );
    $this->MY_Model->tambah($form_data, $table);

    $count      = $this->MY_Model->count('id_history', 'history_artikel', array('id_artikel' => $id_artikel))->i;
    $form_data  = array('countShow' => $count);
    $where      = array('id_artikel' => $id_artikel);
    $this->MY_Model->update($form_data, $where, $this->table);
  }
  function getArtikelPopular()
  {
    $orderby    = 'countShow';
    return $this->MY_Model->getDataOrderbyLimitDESC($this->table, $orderby, 3);
  }
  function getArtikel($id)
  {
    $where = array('id_artikel' => $id);
    return $this->MY_Model->singleData($this->table, $where);
  }
  function getFavArtikel()
  {
    $orderby = 'countShow';
    return $this->MY_Model->getMaxDataOrderbyDESC($this->table, $orderby);
  }
  function getArtikelKanan($id_max)
  {
    $orderby = 'countShow';
    $table  = 'artikel';
    $where = array('id_artikel !=' => $id_max);
    return $this->MY_Model->getListOrderbyDESCLimit($table, $where, $orderby, 2);
  }
  function getArtikelByKategori($kategori)
  {
    $field      = 'id_artikel,judul,image,kategori';
    $orderby    = 'countShow';
    $where      = array('kategori' => $kategori);
    return $this->MY_Model->getMaxListWhereOrderbyDESC($field, $this->table, $where, $orderby);
  }
  function getArtikelBaru()
  {
    $orderby    = 'created_date';
    return $this->MY_Model->getDataOrderbyLimitDESC($this->table, $orderby, 4);
  }
}
