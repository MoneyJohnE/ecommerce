<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('Login');

	}

	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|md5");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|matches[password]");
		$this->form_validation->set_rules("email", "EMail", "trim|required");

		if($this->form_validation->run()==FALSE)
		{
			$errors = validation_errors();
			
			$this->session->set_flashdata('errors', $errors);

			redirect('/users/index');
		}
		else
		{
			// var_dump($this->input->post());
			// die();
			$this->load->model('Login');

			$this->Login->add_user($this->input->post());

			redirect('/users/index');

		}
	}

	public function welcome()
	{
		$this->load->view('welcome');
	}

	public function login()	
	{	
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Login');
		$user = $this->Login->login_user($email);
		
		if ($user && $user['password'] == $password) 
		{
			$user_info = array(
				'user_id'=>$user['id'],
				'user_email'=>$user['email'],
				'user_name'=>$user['first_name'].' '.$user['last_name'],
				'is_logged_in'=>true
				);
			$this->session->set_userdata('user_info', $user_info);
			redirect('/users/profile');
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect("/users/index");
		}	
	}
	public function profile()
	{
		if($this->session->userdata('user_info')['is_logged_in']=== TRUE)
		{
			$array['user'] = $this->session->userdata('user_info');
			$this->load->view('welcome', $array);
		}
		else
		{
			echo "Failed to login!";
		}

	}

	public function logout()
	{
		$this->session->session_destroy();
		redirect('/users/login');
	}
	
}
?>