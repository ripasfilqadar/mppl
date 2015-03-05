<script type="text/javascript">
	function check()
	{
		var harga=document.getElementById("harga");
		var y=harga.value;
		var x=y.length;
		
		for (i=0; i<x; i++)
		{
			if (y.charCodeAt(i)>= 48 && y.charCodeAt(i)<=57)
			{

			}
			else{
				alert(y[i]+'hanya inputkan angka di kolom harga');
				break;
			}
		}
	}
</script>

<div style="margin-top:40px; width:500px;margin-left:auto;margin-right:auto">
<h1 style="text-align: center;margin-bottom:30px">Edit Barang</h1>
	<form action="<?php echo base_url()?>admin/edit_barang" method="post" >
		<div class="input-control text">
		 <label class="formlabel">Nama Barang</label>
	    <input type="text" name="nama" value="<?php echo $barang[0]['NAMA_BARANG']?>" />
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Harga Barang</label>
		<div class="input-control text">
	    <input type="text" name="harga" id="harga" value="<?php echo $barang[0]['HARGA']?>" onblur="check()">
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Deskripsi Barang</label>
		<div class="input-control text">
	    <textarea type="text" name="deskripsi" value="<?php echo $barang[0]['DESKRIPSI']?>" rows="5" cols="71"><?php echo $barang[0]['DESKRIPSI']?></textarea>
	    <button class="btn-clear"></button>
		</div>
		<input type="hidden" name="id" value="<?php echo $barang[0]['ID_BARANG']?>">
		<input type="submit" class="default large on-right" value="Edit" style="margin-top:50px">
	</form>
		<form method="post" action="<?php echo base_url()?>admin/editphoto" enctype="multipart/form-data">
			<label class="formlabel" style="margin-top:50px">Foto Barang</label>
			<div class="input-control text" >
			<img src="<?php echo base_url()?>picture/<?php echo $barang[0]['FOTO']?>.png">
		    <input type="file" name="userfile" placeholder="Foto" />
			</div>
			<input type="hidden" name="id" value="<?php echo $barang[0]['ID_BARANG']?>">
			<input type="submit" class="default large on-right" value="Edit Foto">
		</form>
		<?php print_r($barang)?>
		
</div>