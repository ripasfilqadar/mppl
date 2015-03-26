<?php
class Barang extends CI_Controller
{
	public function Barang()
	{
		parent::__construct();
		$this->load->model('barangmodel');
	}
	
	function index()
	{
	
	}

	public function loadBarang()
	{
		$data['barang']=$this->barangmodel->get_all_barang();
		$this->load->view('barangData', $data);
	}
}
