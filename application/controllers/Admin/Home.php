<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['bulan']      = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        $data['content']    = 'home';
        $data['artikel']    = $this->MY_Model->count_data('artikel');
        $data['komentar']   = $this->MY_Model->count_data('komentar');
        $data['today']      = $this->getToday()->i;
        // $data['monthly']    = $this->getMonthly()->i;
        $this->load->view('templates/default', $data);

        // $this->MY_Model->insert_activity(current_url());
        // var_dump($data['monthly']);
    }
    function getMonthly()
    {
        $now    = date('Y-');
        $month  = $this->input->post('bulan') + 1;
        $field  = 'ipaddr';
        $table  = 'user_activity';
        if ($month < 10) $month = '0' . $month;
        for ($i = 1; $i < 32; $i++) {
            if ($i < 10) $i = '0' . $i;
            $date   = $now . $month . "-" . $i;
            $where = array(
                'date >=' => $date . ' 00:00:01',
                'date <=' => $date . ' 23:59:59'
            );
            $result = $this->MY_Model->countDistinct($field, $table, $where);
            // echo $date . " ";
            echo $result->i . ",            ";
        }
        // var_dump($result->result_array());
        return $result;
    }
    function getToday()
    {
        $now    = date('Y-m-d');
        $field = 'ipaddr';
        $table = 'user_activity';
        $where = array(
            'date >=' => $now . ' 00:00:01',
            'date <=' => $now . ' 23:59:59'
        );
        return $this->MY_Model->countDistinct($field, $table, $where);
    }
}
