<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
    }

    public function index()
    {
        $data['content']    = 'public/article';
        $this->load->view('templates/public', $data);
        // $this->MY_Model->insert_activity(current_url());
    }
}
