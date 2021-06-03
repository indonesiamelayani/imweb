<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
    }
    public function index()
    {
        $data['desc']       = $this->getInfoDesc();
        $data['karsa']      = $this->getInfoKarsa();
        $data['karya']      = $this->getInfoKarya();
        $data['struktur']   = $this->getInfoStruktur();
        $data['alur_p']     = $this->getInfoAlurPublikasi();
        $data['publikasi']  = $this->getInfoPublikasi();
        $data['manajemen']  = $this->getInfoManajemen();
        $data['kajian']     = $this->getInfoKajian();
        $data['aktivitas']  = $this->getInfoAktifitas();
        // var_dump($data['alur_p']->result_array());
        $data['content']    = 'public/tentang';
        $this->load->view('templates/public', $data);
        // $this->MY_Model->insert_activity(current_url());
    }
    function getInfoAlurPublikasi()
    {
        $table  = 'tentang';
        $group  = $this->common_variable->getGroupAlurPublikasi();
        $where  = array('group' => $group);
        return $this->MY_Model->getList($table, $where);
    }
    function getInfoAktifitas()
    {
        $table  = 'tentang';
        $group  = $this->common_variable->getGroupAktifitas();
        $where  = array('group' => $group);
        return $this->MY_Model->getList($table, $where);
    }
    function getInfokajian()
    {
        $table  = 'tentang';
        $group  = $this->common_variable->getGroupKajianPenelitian();
        $where  = array('group' => $group);
        return $this->MY_Model->getList($table, $where);
    }
    function getInfoManajemen()
    {
        $table  = 'tentang';
        $group  = $this->common_variable->getGroupManajemen();
        $where  = array('group' => $group);
        return $this->MY_Model->getList($table, $where);
    }
    function getInfoKarsa()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdKarsa();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
    function getInfoKarya()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdKarya();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
    function getInfoDesc()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdDesc();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
    function getInfoStruktur()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdStruktur();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
    function getInfoPublikasi()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdPublikasi();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
}
