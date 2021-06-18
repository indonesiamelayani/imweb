<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infografis extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    $this->load->library('common_variable');
  }
  public function index()
  {
    $data['info']     = $this->getInfografis();
    // var_dump($data['alur_p']->result_array());
    $data['content']    = 'public/infografis';
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
  }
  function getInfografis()
  {
    $table  = 'infografis';
    return $this->MY_Model->getListData($table);
  }
}
