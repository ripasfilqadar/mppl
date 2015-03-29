<script type="text/javascript">
  function validateForm() 
  {
      var x = document.forms["myForm"]["nama"].value;
      var z = document.forms["myForm"]["email"].value;
      var y = document.forms["myForm"]["hp"].value;
      var a = document.forms["myForm"]["pesan"].value;
      var check=true;
      var content;
      if (x == null || x == "") {
         alert('Harap isi kolom nama');
         check=false;
      }
      else if (y == null || y == "") {
           alert('Harap isi kolom email');
           check=false;
      }
      else if (z == null || z == "") {
           alert('Harap isi kolom HP');
          check=false;
      }
      else if (a == null || a == "") {
           alert('Harap isi kolom pesan');
          check=false;
      }
      return check;
  }
</script>
<div style="margin:auto; width:60%;">
<form class="form-horizontal" method="POST" name="myForm" onsubmit="return validateForm()"action="<?php echo base_url()?>main/submitkontak">
<h3>Silahkan Kontak Kami</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="col-sm-2 form-control" id="exampleInputEmail1" placeholder="Masukkan nama Anda">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E- Mail</label>
    <input type="e-mail" name="email" class="col-sm-2 form-control" placeholder="Masukkan Email Anda">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">NO HP</label>
    <input type="text" name="hp" id="exampleInputFile" class="col-sm-2 form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Pesan</label>
    <textarea name="pesan" placeholder="Masukkan keluhan Anda" class="col-sm-2 form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Kirim</button>
</form>
</div>