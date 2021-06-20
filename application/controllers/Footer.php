<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('core/MY_Model');
    $this->load->library('common_variable');
  }
  public function index()
  {
    $data['instagram']       = $this->getInfoInstagram();
    $data['facebook']      = $this->getInfoFacebook();
    $data['twitter']      = $this->getInfoTwitter();
    $data['youtube']   = $this->getInfoYoutube();
    $this->load->view('templates/public', $data);
    $this->MY_Model->insert_activity(current_url());
  }
  function getInfoInstagram()
  {
    $table  = 'pengaturan';
    $where  = array('id' => '1');
    return $this->MY_Model->singleData($table, $where);
  }
  function getInfoFacebook()
  {
    $table  = 'pengaturan';
    $where  = array('id' => '2');
    return $this->MY_Model->singleData($table, $where);
  }
  function getInfoTwitter()
  {
    $table  = 'pengaturan';
    $where  = array('id' => '3');
    return $this->MY_Model->singleData($table, $where);
  }
  function getInfoYoutube()
  {
    $table  = 'pengaturan';
    $where  = array('id' => '4');
    return $this->MY_Model->singleData($table, $where);
  }
}
