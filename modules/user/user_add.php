<?php
if (isset($_POST['submit'])) {
  $data = [
    'nama' => $_POST['nama'],
    'kelas' => $_POST['kelas'],
    'kota' => $_POST['kota'],
    'jk' => $_POST['jk'],
  ];
  $db->insert('users',$data);
  header('location:?page=user');
}

?>
<form action="?page=user_add" method="post">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jk" name="jk" placeholder="L or P">
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Simpan">
    </div>
  </div>
</form>
