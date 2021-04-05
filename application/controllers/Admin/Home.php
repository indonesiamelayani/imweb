<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('core/MY_Model');
    }
    public function index()
    {
        $data['content']    = 'home';
        $this->load->view('templates/default', $data);

        $this->MY_Model->insert_activity(current_url());
    }

  }