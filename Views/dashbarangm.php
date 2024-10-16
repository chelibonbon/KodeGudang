 <a href="<?= base_url('home/input_bm/'.$value->id_bm) ?>" class="btn btn-success">+ Tambah </a>
<table class="table table-hover">
  <h3>Barang masuk</h3>
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>nama barang</th>
        <th>jumlah</th>
        <th width='5%'>tanggal</th>
        <?php
        if(session()->get('level')==1 || session()->get('level')==4) {
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
        <td>
          <?php
        if(session()->get('level')==1 || session()->get('level')==4) {
         ?>
          <a href="<?= base_url('home/hapus_barangmasuk/'.$value->id_bm) ?>" class="btn btn-danger">Hapus </a>
      </td>
    <?php } ?>
    </tr>
<?php
}
?>

    </tbody>
  </table>