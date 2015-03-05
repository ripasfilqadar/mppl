<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('cart');
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function lp3m()
	{
		$this->load->view('lp3m');
	}
	public function cikoro()
	{
		$this->load->view('cikoro');
	}
	public function cart()
	{
		$this->load->view('cart');
	}
	function hto()
	{
		$this->load->view('hto');
	}
}
