<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result_poll extends CI_Controller
{
    public $table = 'result_polling';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $id_judul           = $this->input->post('id_judul');
        $data['info_judul'] = $this->getInfoJudul($id_judul);
        $data['info_opsi']  = $this->getInfoOpsi($id_judul);
        $data['content']    = 'result_poll';
        // var_dump($data['info_opsi']->result_array());
        $this->load->view('templates/default', $data); ////asd
    }
    function getInfoJudul($id_judul)
    {
        $where = array('id' => $id_judul);
        return $this->db->select('*')->from('polling')->where($where)->limit(1)->get()->row();
    }
    function getInfoOpsi($id_judul)
    {
        $where = array('id_judul' => $id_judul);
        return $this->MY_Model->getList('polling', $where);
    }
}
