<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->model('transaksi');
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function lp3m()
	{
		$this->load->view('header_guest');
		$this->load->view('lp3m');
		$this->load->view('footer');
	}
	public function cikoro()
	{
		$this->load->view('header_guest');
		$this->load->view('cikoro');
		$this->load->view('footer');
	}
	function hto()
	{
		$this->load->view('header_guest');
		$this->load->view('hto');
		$this->load->view('footer');
	}
	function kontak()
	{
		$this->load->view('header_guest');
		$this->load->view('kontak');
		$this->load->view('footer');
	}
	function submitkontak()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$hp=$this->input->post('hp');
		$pesan=$this->input->post('pesan');
		$data = array('id_kontak' =>"",
		'Nama'=>$nama,
		'Email'=>$email,
		'NO_HP'=>$hp,
		'pesan'=>$pesan,
		'status'=>'Belum Dibalas');
		$this->transaksi->submitkontak($data);
		redirect('shopping');
	}
}
