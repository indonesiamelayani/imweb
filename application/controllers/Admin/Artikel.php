<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['artikel']    = $this->getListArtikel();
        // $data['komen']      = $this->MY_Model->count()->i;
        // $data['artikel']        = $this->getCountKomentar();
        // var_dump($data['count']->result_array());
        // var_dump($data['komen']->i);
        // $komentar =  implode("|", $data['komen']->jmlkomen);
        // echo $data['komen'];
        // die();
        $data['content']    = 'artikel';
        $this->load->view('templates/default', $data); ////asd
    }
    function getCountKomentar()
    {
        // $id_artikel = '';
        $table = 'artikel';
        // $where = array('id_artikel' => $id_artikel);
        $orderby = 'artikel.id_artikel';
        $destination = 'komentar';
        $join = '' . $destination . '.id_artikel=' . '' . $table . '.id_artikel';
        return $this->MY_Model->getListDataJoinOrderby($table, $orderby, $destination, $join);
    }
    function getListArtikel()
    {
        $table   = 'artikel';
        $orderby = 'created_date';
        return $this->MY_Model->getListDataOrderby($table, $orderby);
    }
    function tambah()
    {
        $judul      = $this->input->post('judul');
        $isi        = $this->input->post('isi');
        $user       = $_SESSION['username'];
        $now        = date('Y-m-d H:i:s');
        $table      = 'artikel';
        $form_data  = array(
            'judul'         => $judul,
            'isi'           => $isi,
            'created_date'  => $now,
            'created_by'    => $user
        );

        $this->MY_Model->tambah($form_data, $table);
        redirect('admin/artikel/index');
    }
    function edit()
    {
        $id         = $this->input->post('id_artikel');
        $judul      = $this->input->post('judul');
        $isi        = $this->input->post('isi');
        $now        = date('Y-m-d H:i:s');
        $table      = 'artikel';
        $form_data  = array(
            'judul'         => $judul,
            'isi'           => $isi,
            'last_update'   => $now,
        );
        $where      = array('id_artikel' => $id);
        $this->MY_Model->update($form_data, $where, $table);
        redirect('admin/artikel/index');
    }
    function hapus() #hard delete/clean delete
    {
        $id     = $this->input->post('id_artikel');
        $where  = array('id_artikel' => $id);
        $table  = 'artikel';
        $this->MY_Model->hapus($where, $table);
        redirect('admin/artikel/index');
    }
}
