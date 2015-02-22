{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($baju);  foreach($baju as $row) : ?>
		{
		  "id": "<?php  echo $row->nama_baju; ?>",
		  "nama": "<?php  echo $row->harga_baju; ?>",
		  "total": "<?php echo $i?>",
		  "status": "<?php echo $i?>",
		  "ubahstatus": "<button  class='default' onclick=changestatus('sad')>Edit</button>",
		  "details": "<button  class='default' onclick=hapusbarang('abc','sad')><i class='icon-remove on-left'></i>Hapus</button>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}