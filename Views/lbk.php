<div class="container mt-3">
<h3>Laporan barang keluar</h3>
<!-- <form action="<?= base_url('home/simpan_bm1') ?>" method="POST"> -->
  <table> 
    <tr>
      <td>Tanggal awal</td>
      <td><input type="date" class="form-control" name="tanggalawal"></td>
    </tr>
    <tr>
      <td>Tanggal akhir</td>
      <td><input type="date" class="form-control" name="tanggalakhir"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" value="<?= $takdirestui->id_bk ?>">
        <a href="<?= base_url('home/tabelbk/'.$takdirestui->id_bk) ?>"
          button class="btn btn-primary">
          <i class="fas fa-print"></i>
          Cetak
        </button>
      </a>
    </td>
  </tr>
  </table>
</form>
</div>