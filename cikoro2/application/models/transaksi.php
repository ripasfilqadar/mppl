<?php
class Transaksi extends CI_Model
{
	function Transaksi()
	{
		parent::__construct();
	}
	function edit_status ($id,$status)
	{
		$sql="update transaksi set status=$status where ID_TRANSAKSI='$id'";
		$query=$this->db->query($sql);
	}
	function detail_transaksi($id)
	{
		$sql="SELECT barang.`NAMA_BARANG`,detail_transaksi.`QUANTITY` FROM detail_transaksi,transaksi,barang WHERE transaksi.`ID_TRANSAKSI`=$id AND transaksi.`ID_TRANSAKSI`=detail_transaksi.`ID_TRANSAKSI`AND detail_transaksi.`ID_BARANG`=barang.`ID_BARANG`";
		$query=$this->db->query($sql);
		return $query->result();
	}

}