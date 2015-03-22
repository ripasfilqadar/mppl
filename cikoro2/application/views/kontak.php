<div style="margin:auto; width:60%;">
<form class="form-horizontal" method="POST" action="<?php echo base_url()?>main/submitkontak">
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