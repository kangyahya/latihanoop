<?php $userdata = $db->get('users'); ?>
<h3>Data User</h3>
<table width="100%" class="table table-hover table-bordered">
  <thead>
    <tr class="bg-green">
			<th>NO</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Kota</th>
			<th>AKSI</th>
    </tr>
	</thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($userdata as $row) { ?>
    <tr>
      <td><?=$no++?></td>
      <td><?=$row['nama']?></td>
      <td class="text-center"><?=$row['kelas']?></td>
      <td class="text-center"><?=($row['jk']='L'?'Laki - Laki':'Perempuan')?></td>
      <td class="text-center"><?=$row['kota']?></td>
      <td> <a href="?page=user_detail&id=<?=$row['id']?>">View</a> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
