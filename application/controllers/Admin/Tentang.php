<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['karsa_k']    = $this->getInfoKarsaKarya();
        $data['desc']       = $this->getInfoDesc();
        $data['manajemen']  = $this->getInfoManajemen();
        $data['kajian']     = $this->getInfoKajian();
        $data['aktifitas']  = $this->getInfoAktifitas();
        $data['content']    = 'tentang';
        // var_dump($data['aktifitas']->result_array());
        $this->load->view('templates/default', $data); ////asd
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
    function getInfoKarsaKarya()
    {
        $table  = 'tentang';
        $group  = $this->common_variable->getGroupKarsaKarya();
        $where  = array('group' => $group);
        return $this->MY_Model->getList($table, $where);
    }
    function getInfoDesc()
    {
        $table  = 'tentang';
        $id     = $this->common_variable->getIdDesc();
        $where  = array('id' => $id);
        return $this->MY_Model->singleData($table, $where);
    }
    function edit()
    {
        $deskripsi  = $this->input->post('deskripsi');
        $id         = $this->input->post('id');
        $group      = $this->input->post('group');
        $count      = count($id);
        // $filename   = $_FILES['files']['name'];
        // $temp       = $_FILES['files']['tmp_name'];
        $location   = "files/";
        $time       = $this->common_variable->getTimeNow();
        // echo $count;
        for ($i = 0; $i < $count; $i++) {
            if ($group[$i] == 5) {
                $form_data = array(
                    'deskripsi'     => $deskripsi[$i],
                    'last_update'   => $time
                );
            }
            if (strlen($_FILES['files']['name'][$i]) != 0 || $_FILES['files']['name'][$i] = null) {
                $form_data = array(
                    'deskripsi'     => $deskripsi[$i],
                    'image'         => $_FILES['files']['name'][$i],
                    'last_update'   => $time,
                );

                // var_dump($form_data);
                move_uploaded_file($_FILES['files']['tmp_name'][$i], $location . $_FILES['files']['name'][$i]);
            } else {
                $form_data = array(
                    'deskripsi'     => $deskripsi[$i],
                    'last_update'   => $time
                );
                // var_dump($form_data);
            }
            $where      = array('id' => $id[$i]);
            $table      = 'tentang';
            $this->MY_Model->update($form_data, $where, $table);
        }
        // var_dump($form_data, $id);
        redirect('admin/tentang');
    }
}
