 <a href="<?= base_url('home/input_bk/'.$value->id_bk) ?>" class="btn btn-success">+ Tambah </a>
<table class="table table-hover">
  <h3>Barang keluar</h3>
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>nama barang</th>
        <th>jumlah</th>
        <th width='5%'>tanggal</th>
         <?php
        if(session()->get('level')==1 || session()->get('level')==5) {
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
        <td><?= $value->nama_barang ?></td>
        <td><?= $value->jumlah ?></td>
        <td><?= $value->tanggal ?></td>
        <?php
        if(session()->get('level')==1 || session()->get('level')==5) {
         ?>
        <td>
          <a href="<?= base_url('home/hapus_barangkeluar/'.$value->id_bk) ?>" class="btn btn-danger">Hapus </a>
      </td>
    <?php } ?>
    </tr>
<?php
}
?>

    </tbody>
  </table>