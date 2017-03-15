<?php
class user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session','form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	public function index(){
			$this->load->view('user_view');
	}}