<?php
class Admin_page extends CI_Controller
{
	function Admin_page()
	{
		parent::__construct();
		$this->load->model('barangModel');
		$this->load->model('transaksi');
	}
	
	function index()
	{
		$this->cek_login();
		$this->load->view('header');
		$this->load->view('home');
	}
	function loadBarang()
	{
		$this->cek_login();
		$data['barang']=$this->barangModel->get_all();
		$this->load->view('barangData',$data);
	}
	function listBarang()
	{
		$this->cek_login();
		$data['barang']=$this->barangModel->get_all();
		$this->load->view('header');
		$this->load->view('table',$data);
	}
	function tambahbarang()
	{
		$this->cek_login();
		$this->load->view('header');
		$this->load->view('tambahbarang');
	}
	function editBarang()
	{
		$this->cek_login();
		$id=$this->input->post('id');
		if ($id==NULL)
		{
			redirect('admin_page/listBarang');
		}
		$data['barang']=$this->barangModel->getBarang1($id);
		$this->load->view('header');
		$this->load->view('edit',$data);
	}
	function listTransaksi()
	{
		$this->cek_login();
		$this->load->view('header');
		$this->load->view('listtransaksi');
	}
	function loadTransaksi()
	{
		$this->cek_login();
		$data['transaksi']=$this->barangModel->get_all_transaksi();
		//print_r($data['transaksi']);
		$this->load->view('loadTransaksi',$data);
	}
	public function cek_login()
	{
		if($this->session->userdata('username')==NULL)
		{
			redirect('login');
		}
	}
	function detail_transaksi($id)
	{
		$data['data']=$this->transaksi->detail_transaksi($id);
		$this->load->view('detail_transaksi',$data);

	}
	
}