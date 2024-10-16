 <a href="<?= base_url('home/input_barang/'.$value->id_brg) ?>" class="btn btn-success">+ Tambah </a>
<table class="table table-hover">
  <h3>Barang</h3>
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>nama barang</th>
        <th>kode barang</th>
        <th width='5%'>stok</th>
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
        <td><?= $value->nama_barang ?></td>
        <td><?= $value->kode_barang ?></td>
        <td><?= $value->stok ?></td>
         <?php
        if(session()->get('level')==1) {
         ?>
        <td>
          <a href="<?= base_url('home/hapus_barang/'.$value->id_brg) ?>" class="btn btn-danger">Hapus </a>
      </td>
       <?php } ?>
    </tr>
<?php
}
?>

    </tbody>
  </table>