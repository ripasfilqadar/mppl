
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
				 $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Warning',
                width: 550,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content = '<div align="center"><h3>Hanya masukkan angka</h3></div>';
                    $.Dialog.title("Hapus barang");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
				break;
			}
		}
	}
</script>

<div style="margin-top:40px; width:500px;margin-left:auto;margin-right:auto">
<h2 style="text-align: center;margin-bottom:5px;font-weight: bold;">Tambah Barang</h2>
<div class="validation"> 
	<?php echo validation_errors(); ?>	
</div>
	<form action="<?php echo base_url()?>admin/tambah_barang" method="post" enctype="multipart/form-data">
		<div class="input-control text">
		 <label class="formlabel">Nama Barang</label>
	    <input type="text" name="nama" placeholder="Nama Barang"/>
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Harga Barang</label>
		<div class="input-control text">
	    <input type="text" name="harga" placeholder="Harga Barang" id="harga" onblur="check()">
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Deskripsi Barang</label>
		<div class="input-control text">
	    <textarea type="text" name="deskripsi" placeholder="Deskripsi Barang" rows="5" cols="71"></textarea>
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel" style="margin-top:40px">Foto Barang</label>
		<div class="input-control text" >
	    <input type="file" name="userfile" placeholder="Foto" />
    	<button class="btn-file"></button>
		</div>
		<input type="submit" class="primary large on-right" value="Tambah">
	</form>

</div>

