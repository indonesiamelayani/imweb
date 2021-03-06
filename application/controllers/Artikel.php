<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
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
        $data['baru']       = $this->getArtikelbaru();
        $data['politik']    = $this->getArtikelByKategori('Politik');
        $data['digilife']   = $this->getArtikelByKategori('Digilife');
        $data['pelayanan']  = $this->getArtikelByKategori('Pelayanan');
        $data['keamanan']   = $this->getArtikelByKategori('Keamanan');
        $data['besar']      = $this->getFavArtikel();
        $data['kanan']      = $this->getArtikelKanan($data['besar']->id_artikel);
        $data['content']    = 'public/article';
        // var_dump($data['kanan']->result_array());
        $this->load->view('templates/public', $data);
        $this->MY_Model->insert_activity(current_url());
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
