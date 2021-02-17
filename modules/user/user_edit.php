<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $data = [
    'nama' => $_POST['nama'],
    'kelas' => $_POST['kelas'],
    'kota' => $_POST['kota'],
    'jk' => $_POST['jk'],
  ];
  $db->update('users', $data, $id);
  header('location:?page=user');
}
$userdata = $db->get_where('users',[array('id', $_GET['id'])]);
?>
<form action="?page=user_edit" method="post">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?=$userdata['nama']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" value="<?=$userdata['kelas']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jk" name="jk" placeholder="L or P" value="<?=$userdata['jk']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="<?=$userdata['kota']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="hidden" name="id" value="<?=$userdata['id']?>">
      <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update">
    </div>
  </div>
</form>
