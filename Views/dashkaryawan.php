  <a href="<?= base_url('home/input_kry/'.$value->id_kry) ?>" class="btn btn-success">+ Tambah </a>
<table class="table table-hover">
  <h3>Karyawan</h3>
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>nama karyawan</th>
        <th>email</th>
        <th width='5%'>password</th>
        <th>level</th>
        <th>NIK</th>
        <th>tempat lahir</th>
        <th>tanggal lahir</th>
        <th>jenis kelamin</th>
        <th>alamat</th>
        <th>no hp</th>
        <th>masa kerja</th>
        <th>status</th>
        <th>gaji</th>
         <?php
        if(session()->get('level')==1) {
         ?>
        <th>aksi</th>
         <?php } ?>
      </tr>
    </thead>
    <tbody>

    <?php
    $ms=1;
    foreach ($takdirestui as $key => $value) {
      ?>
      <tr>
        <td><?= $ms++ ?></td>
        <td><?= $value->nama ?></td>
        <td><?= $value->username ?></td>
        <td><?= $value->password ?></td>
        <td><?= $value->level ?></td>
        <td><?= $value->NIK ?></td>
        <td><?= $value->tempat_lahir ?></td>
        <td><?= $value->tgl_lahir ?></td>
        <td><?= $value->jeniskel ?></td>
        <td><?= $value->alamat ?></td>
        <td><?= $value->nohp ?></td>
        <td><?= $value->masa_kerja ?></td>
        <td><?= $value->status ?></td>
        <td><?= $value->gaji ?></td>

        
        <td>
          <link rel="stylesheet" type="text/css" href="<?=base_url('fontawesome/css/fontawesome.min.css');?>">
          <link rel="stylesheet" type="text/css" href="<?=base_url('fontawesome/css/all.css');?>">
         <a href="<?= base_url('home/edit_karyawan/'.$value->id_user) ?>"
         button class="btn btn-success">
          <i class="fas fa-info-circle"></i>
         Detail
       </button>
     </a>

      </td>
    </tr>
<?php
}
?>
</tbody>
</table>