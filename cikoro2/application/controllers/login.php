<?php

class Login extends CI_Controller
{
	function Login()
	{
		parent::__construct();
		$this->load->model('usermodel');

	}
	
	function index()
	{
		$data['header']=0;
		if ($this->session->userdata('username')!=NULL)
		{
			redirect('admin_page');
		}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/login');
		$this->load->view('admin/footer');

	}
	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->session->userdata('username')!=NULL)
		{
			redirect('admin_page');
		}
		$query = $this->usermodel->check($username, $password);
		if ($query==1)
		{
			$data=array('username'=>$username);
		$this->session->set_userdata($data);
		redirect('admin_page/listbarang');
		}
		else
		{
			$data['checklogin']=1;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('num_pinjam');
		$this->session->unset_userdata('status_admin');
		$this->session->sess_destroy();
		redirect('login');
	}
}