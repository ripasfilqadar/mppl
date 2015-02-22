<?php

class Login extends CI_Controller
{
	function Login()
	{
		parent::__construct();
		$this->load->model('userModel');

	}
	
	function index()
	{
		$this->load->view('header');
		$this->load->view('login');

	}
	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->userModel->check($username, $password);
		if ($query==1)
		{
			$data=array('username'=>$username);
		$this->session->set_userdata($data);
		redirect('admin_page');
		}
		else
		{
			$data['checklogin']=1;
			$this->load->view('header',$data);
			$this->load->view('login');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('num_pinjam');
		$this->session->unset_userdata('status_admin');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}