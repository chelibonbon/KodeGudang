<div class="container mt-3">
<h3>Tambah barang masuk</h3>
<form action="<?= base_url('home/dashbarangm') ?>" method="POST">
  <table> 
    <tr>
      <td>nama barang</td>
      <td><label>nama barang:</label>
        <select class="form-control">
          <option>pilih barang</option>
          <?php
          foreach ($takdirestui as $key => $value) {
            ?>
            <option><?= $value->kode_barang?> - <?= $value->nama_barang?></option>
          <?php
        }
        ?>
        </select class>
      </td>
    </tr>
    <tr>
      <td>jumlah</td>
      <td><input type="number" class="form-control" name="jumlah" value="<?= $takdirestui->jumlah ?>"></td>
    </tr>
    <tr>
      <td>tanggal masuk</td>
      <td><input type="date" class="form-control" name="tanggal" value="<?= $takdirestui->tanggal ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" value="<?= $takdirestui->id_bm ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="reset" value="reset" class="form-control">
        <input type="button" value="kembali" class="form-control">
      </td>
    </tr>
  </table>
</form>
</div>