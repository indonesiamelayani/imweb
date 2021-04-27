<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $table              = 'halaman';
        $id                 = 3;
        $where              = array('id' => $id);
        $data['halaman']    = $this->MY_Model->singleData($table, $where);
        $data['content']    = 'galeri';
        $this->load->view('templates/default', $data);

        $this->MY_Model->insert_activity(current_url());
    }
    
    function tambah()
    {
        $judul      = $this->input->post('judul');
        $deskripsi  = $this->input->post('deskripsi');
        $count      = count($_FILES['files']['name']);
        $a = 0;
        $filename   = $_FILES['files']['name'];
        $temp       = $_FILES['files']['tmp_name'];
        $location   = "files/";
        $time       = $this->common_variable->getTimeNow();

            $form_data  = array(
                'judul'         => $judul,
                'isi'           => $isi,
                'created_date'  => $now,
                'created_by'    => $user,
                'image'         => $filename
            );

            move_uploaded_file($temp, $location . $filename);
            $this->MY_Model->tambah($form_data, $table);
            redirect('admin/artikel/index');
    }
    
    function edit()
    {
        $judul      = $this->input->post('judul');
        $deskripsi  = $this->input->post('deskripsi');
        $val        = $this->input->post('val');
        $count      = count($_FILES['files']['name']);
        $a = 0;
        $filename   = $_FILES['files']['name'];
        $temp       = $_FILES['files']['tmp_name'];
        $location   = "files/";
        $time       = $this->common_variable->getTimeNow();
        for ($i = 0; $i < $count; $i++) {
            if (strlen($filename[$i]) != 0) {
                move_uploaded_file($temp[$i], $location . $filename[$i]);
                $id         = 3;
                $table      = 'halaman';
                $field      = 'image';
                $key        = "$.img".$i;
                $this->MY_Model->update_jsonimg($table, $field, $key, $filename[$i], $judul, $deskripsi, $time, $id);
            } else {
                $form_data = array(
                    'judul'         => $judul,
                    'deskripsi'     => $deskripsi,
                    'updated'       => $time
                );
            $where      = array('id' => 3);
            $table      = 'halaman';
            $this->MY_Model->update($form_data, $where, $table);
            }
            
    }
        redirect('admin/galeri');
    }
}
