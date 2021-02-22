<?php $bukudata = $db->get('buku'); ?>
<h3>Data Buku</h3>
<a href="?page=user_add" class="btn btn-primary">Tambah Buku</a>
<table width="100%" class="table table-hover table-bordered">
  <thead>
    <tr class="bg-green">
			<th>NO</th>
			<th>Nama Buku</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>AKSI</th>
    </tr>
	</thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($bukudata as $row) { ?>
    <tr>
      <td width='1%'><?=$no++?></td>
      <td><?=$row['nama_buku']?></td>
      <td class="text-center"><?=$row['penerbit']?></td>
      <td class="text-center"><?=$row['tahun_terbit']?></td>
      <td> <a href="?page=buku_detail&id=<?=$row['id']?>">View</a> | <a href="?page=buku_edit&id=<?=$row['id']?>">Edit</a> | <a href="?page=buku_delete&id=<?=$row['id']?>">Hapus</a> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
