<?php 
class Transaksi extends CI_Controller
{
	function Pinjam()
	{
		parent::__construct();
		$this->load->helper('mydb');
        $this->load->library('cezpdf');
		$this->load->model('barangModel');
	}

	public function loadKeranjang()
	{
		$this->load->view('keranjangData');
	}
	
	public function loadPeminjaman()
	{
		$data['peminjaman']=$this->barangModel->list_peminjaman();
		$this->load->view('peminjamanData', $data);
	}
	
	public function loadDetailPeminjaman()
	{
		$id = $this->session->userdata("id_pinjam");
		$data['detail_peminjaman']= $this->barangModel->detail_transaksi($id);
		$this->load->view('detailPeminjamanData', $data);
	}

	function pinjam_barang($id)
	{
		$barang = $this->barangModel->get_barang_by_id($id);
		$nama = $barang->nama_barang;
		$path = $barang->gambar;
		
		$data = array(
               'id'      => $id,
               'qty'     => 1,
               'price' => 1,
               'name'    => $nama,
               'gambar' => $path
        );
		$this->cart->insert($data);
		redirect($this->agent->referrer());
	}

	public function update($id)
	{
		$qty = $this->input->post('qty');
		$data = array(
               'rowid' => $id,
               'qty'   => $qty
        );
		$this->cart->update($data);
		$data['return']=$this->cart->total();
		$this->load->view('header',$data);
		$this->loadd->view('detail_pinjam',$data);
	}


	public function finish()
	{
		if ($this->cart->total_items()==0)
		{
			echo "<script type=\"text/javascript\">alert('anda belum meminjam apapun')</script>";	
			redirect(base_url()."home/listBarang");
		}

		else
		{
			$nama = $this->input->post('nama');
			$nrp = $this->input->post('nrp');
			$no_hp = $this->input->post('no_hp');
			$query = $this->barangModel->finish($nama,$nrp,$no_hp);			
			$this->cart->destroy();
		}
	}
	
	public function bukti($query)
	{
		$pdfku = new Cezpdf("A5", 'landscape'); //595.28,841.29
		
        $pdfku->addInfo('Title','List Barang');
        $pdfku->ezSetCmMargins("3","3","3","3");
        $barang = $this->barangModel->detailPeminjaman($query);
        $pdfku->ezSetY(100);
        $pdfku->ezSetDy(230);
        //$pdfku->addJpegFromFile("icon.jpg",20,300,-1);
        $pdfku->addText(120,($pdfku->y)+30,18,"Bukti Peminjaman Inventaris Laboratorium");
        $pdfku->addText(160,($pdfku->y)+10,15,"Komputasi Berbasis Jaringan (KBJ)");
        $cols_db=
        array
        (
        	'id_barang' => 'ID Barang',
            'nama_barang'=>'Nama Barang'
        );
        
        $option_db=
        array
        (
            'showHeadings'=>2,'shaded'=>0,'xPos'=>'center','xOrientation'=>'center','fontSize' => 12,
            'cols'=>array
            (
                'id_barang'=>array
                (
                    'justification'=>'center',
                    'width'=>'120'
                ),
                    'nama_barang'=>array
                (
                    'justification'=>'center',
                    'width'=>'120'
                )
            )
        );

		$pdfku->ezTable( $barang, $cols_db, '', $option_db);
        $pdfku->addText(100,($pdfku->y)-40,12,"Mengetahui ");
        $pdfku->addText(90,($pdfku->y)-60,12,"Administrator Lab");
        $pdfku->addText(400,($pdfku->y)-60,12,"Kepala Laboratorium");
        $pdfku->addText(80,($pdfku->y)-130,10,"__________________");
        $pdfku->addText(400,($pdfku->y)-130,10,"__________________");

        $pdfku->ezStream();
	}

	function hapus_barang($id)
	{
		$data = array(
		   'rowid'      => $id,
		   'qty'     => 0
		);
		$flag['flagkiri']=0;
		$this->cart->update($data);
		$this->cart->insert($data);
		redirect($this->agent->referrer());
	}
	
	function kosongkanKeranjang()
	{
		$this->cart->destroy();
		redirect($this->agent->referrer());
	}
	
	public function kembali($id)
	{
		$this->barangModel->kembali($id);
		redirect(base_url()."admin/listPeminjaman");
	}
}
