<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public $table = 'artikel';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
    }

    public function index()
    {
        $data['besar']      = $this->getFavArtikel();
        $data['kanan']      = $this->getArtikelKanan($data['besar']->id_artikel);
        $data['content']    = 'public/article';
        // var_dump($data['kanan']->result_array());
        $this->load->view('templates/public', $data);
        // $this->MY_Model->insert_activity(current_url());
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
}
