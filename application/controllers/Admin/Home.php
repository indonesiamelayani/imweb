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

        $data['content']    = 'home';
        $data['artikel']    = $this->MY_Model->count_data('artikel');
        $data['komentar']   = $this->MY_Model->count_data('komentar');
        $data['today']      = $this->getToday()->i;
        $this->load->view('templates/default', $data);

        // $this->MY_Model->insert_activity(current_url());
        // var_dump($data['today']->i);
    }
    function getToday()
    {
        $now    = date('Y-m-d');
        $field = 'ipaddr';
        $table = 'user_activity';
        $where = array(
            'date >=' => $now . ' 00:00:00',
            'date >=' => $now . ' 59:59:59'
        );
        return $this->MY_Model->count($field, $table, $where);
    }

    function getMonth()
    {
        $now    = date('Y-m-d');
        $field = 'ipaddr';
        $table = 'user_activity';
        $where = array(
            'date >=' => $now . ' 00:00:00',
            'date >=' => $now . ' 59:59:59'
        );
        return $this->MY_Model->count($field, $table, $where);
    }
}
