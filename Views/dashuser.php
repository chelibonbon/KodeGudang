  <a href="<?= base_url('home/input_user/'.$value->id_user) ?>" class="btn btn-success">+ Tambah </a>
<table class="table table-hover">
  <h3>User</h3>
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>username</th>
        <th>password</th>
        <th width='5%'>level</th>
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
        <td><?= $value->username ?></td>
        <td><?= $value->password ?></td>
        <td><?= $value->level ?></td>
         <?php
        if(session()->get('level')==1) {
         ?>
        <td>
          <a href="<?= base_url('home/hapus_user/'.$value->id_user) ?>" class="btn btn-danger">Hapus </a>
      </td>
         <?php } ?>
    </tr>
<?php
}
?>

    </tbody>
  </table>