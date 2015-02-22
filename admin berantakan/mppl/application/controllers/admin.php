<?php 
class Admin extends CI_Controller
{
	function Admin ()
	{
		parent::__construct();
		$this->load->model('barangModel');
		$this->load->helper('file');
	}
	function index()
	{
		$this->cek_login();
		$this->load->view('admin/homepage');
	}
	function tambah_barang()
	{	
		$this->cek_login();
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		$kategori=$this->input->post('kategori');
		$foto = $this->input->post('foto');
		
		$data = array(
		   'id_barang' => 'a',
		   'id_kategori'=>$kategori,
		   'nama_barang' =>$nama,
		   'harga' => $harga,
		   'deskripsi' => $deskripsi,
		   'foto'=>"temp"
		);
	   
		$id = $this->barangModel->tambahbarang($data);
		$this->do_upload($id);
		//redirect(base_url()."admin_page/listBarang");
	}
	public function listBarang()
	{
		$this->cek_login();
		$this->load->view('admin/listBarang');
	}
	
	public function listPeminjaman()
	{
		$this->cek_login();
		$this->load->view('admin/listPeminjaman');
	}
	
	public function addBarang()
	{
		$this->cek_login();
		$this->load->view('admin/addBarang');
	}
	
	function editBarang($id=0)
	{
		$this->cek_login();
		$data['data']=$this->barangModel->get_barang_by_id($id);
		$this->load->view('admin/editBarang',$data);
	}
	
	public function cek_login()
	{
		if($this->session->userdata('username')==NULL)
		{
			redirect(base_url());
		}
	}	
	function do_upload($id)
	{
		echo "id".$id;
		$config['file_name']="$id.png";
		$config['upload_path'] = './picture/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '4000';
		$config['max_width']  = '2048';
		$config['max_height']  = '1600';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

		}
		return $config['file_name'];
	}
	
	function edit_barang($id)
	{
		$this->cek_login();

		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$kondisi = $this->input->post('kondisi');
		$ket = $this->input->post('keterangan');
		
		$data = array(
		   'nama_barang' =>$name ,
		   'kondisi' => $kondisi,
		   'keterangan' => $ket,
		   'status'=>$status
		);
		
		$b=$this->barangModel->edit($data,$id);
		redirect($this->agent->referrer());
	}
	
	public function editphoto($id)
	{
		$this->cek_login();
		$this->hapusfoto($id);
		$filename = $this->do_upload($id);
		$this->barangModel->updateFoto($id,$filename);
		redirect($this->agent->referrer());
	}
	
	public function hapusfoto($id)
	{
		$gambar = $this->barangModel->get_barang_by_id($id)->gambar;
		$path="./picture/$gambar";
		if (unlink($path));
	}
	
	public function hapus_barang($id)
	{
		$this->cek_login();
		$this->hapusfoto($id);
		$this->barangModel->hapus($id);
		redirect(base_url()."admin/listBarang");
	}
	
	public function detailPeminjaman($id=0)
	{
		$this->cek_login();
		if($id==0) redirect(base_url()."admin");	
		$this->session->set_userdata("id_pinjam", $id);
		$data["id_pinjam"] = $id;
		$data["peminjaman"] = $this->barangModel->get_peminjaman_by_id($id);
		$this->load->view('admin/detailPeminjaman', $data);
	}
}

