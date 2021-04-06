<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('core/MY_Model');
		if ($_SESSION['username'] == null) redirect(base_url('login'));
	}
	public function index()
	{
		$data['content']	= 'analytic';
		$this->load->view('templates/default', $data); ////asd
	}
}
