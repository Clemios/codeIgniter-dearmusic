<?php
class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
	}
	
	function index()
	{
		$this->load->view('home_view');
	}

	function search(){
		$search = $this->input->post('searchinput');
		$this->db->from('music'); // Le mieux c'est de l'extraire dans un model
		$this->db->like('Title', $search, 'after');
		$query = $this->db->get();
		$query = $query->result_array();
		$data['results_music'] = $query;
		$this->db->from('album'); // Le mieux c'est de l'extraire dans un model
		$this->db->like('Title', $search, 'after');
		$query = $this->db->get();
		$query = $query->result_array();
		$data['results_album'] = $query;
		$this->db->from('artist'); // Le mieux c'est de l'extraire dans un model
		$this->db->like('Complete_name', $search, 'after');
		$query = $this->db->get();
		$query = $query->result_array();
		$data['results_artist'] = $query;
		$data['search'] = $search;
		$this->load->view('search_view', $data);
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('home/index');
	}
}


