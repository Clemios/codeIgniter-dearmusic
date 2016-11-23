<?php
class signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		// set form validation rules
		$this->form_validation->set_rules('FirstName', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('Name', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('Mail', 'Mail ID', 'trim|required|is_unique[user.Mail]');
		$this->form_validation->set_rules('Password', 'Password', 'trim|required|matches[cPassword]');
		$this->form_validation->set_rules('cPassword', 'Confirm Password', 'trim|required');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('signup_view');
        }
		else
		{
			//insert user details into db
			$data = array(
				'FirstName' => $this->input->post('FirstName'),
				'Name' => $this->input->post('Name'),
				'Mail' => $this->input->post('Mail'),
				'Password' => $this->input->post('Password'),
				'UserName' => $this->input->post('UserName'),
				'City' => $this->input->post('City'),
				'Country' => $this->input->post('Country'),
				'Phone' => $this->input->post('Phone')
			);
			
			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('signup/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup/index');
			}
		}
	}
}