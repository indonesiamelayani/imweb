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
        $data['content']    = 'tentang';
        // var_dump($data['manajemen']->result_array());
        $this->load->view('templates/default', $data); ////asd
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
        $count      = count($_FILES['files']['name']);
        $filename   = $_FILES['files']['name'];
        $temp       = $_FILES['files']['tmp_name'];
        $location   = "files/";
        $time       = $this->common_variable->getTimeNow();
        // echo $count;
        for ($i = 0; $i < $count; $i++) {
            if (strlen($filename[$i]) != 0) {
                $form_data = array(
                    'deskripsi'     => $deskripsi[$i],
                    'image'         => $filename[$i],
                    'last_update'   => $time,
                );

                // var_dump($form_data);
                move_uploaded_file($temp[$i], $location . $filename[$i]);
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
