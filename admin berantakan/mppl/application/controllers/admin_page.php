<?php
class Admin_page extends CI_Controller
{
	function Admin_page()
	{
		parent::__construct();
		$this->load->model('barangModel');
	}
	
	function index()
	{
		$this->load->view('header');
		$this->load->view('home');
	}
	function loadBarang()
	{
		$data['barang']=$this->barangModel->get_all();
		$this->load->view('barangData',$data);
	}
	function listBarang()
	{
		$data['barang']=$this->barangModel->get_all();
		$this->load->view('header');
		$this->load->view('table',$data);
	}
	function tambahbarang()
	{
		$data['kategori']=$this->barangModel->getKategori();
		$this->load->view('header');
		$this->load->view('tambahbarang',$data);
	}
	function editBarang()
	{
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
		$this->load->view('header');
		$this->load->view('listtransaksi');
	}
	function loadTransaksi()
	{
		$data['baju']=$this->barangModel->get_all();
		$this->load->view('loadTransaksi',$data);
	}
	
}