<div class="container mt-3">
<h3>Tambah barang rusak</h3>
<form action="<?= base_url('home/simpan_br1') ?>" method="POST">
	<table> 
		 <tr>
      	<td>Nama barang</td>
      	<td>
      	<select class="form-control" name="idbarang">

        	<option> Pilih barang</option>
        	<?php
       	 	foreach ($takdirestui as $key => $value) {
      	?>
        	<option value="<?=$value->id_brg?>"><?= $value->kode_barang?> - <?= $value->nama_barang?></option>
          	<?php
      	}
      	?>
      
      </select>
      </td>
    </tr>
		<tr>
			<td>jumlah</td>
			<td><input type="number" class="form-control" name="jumlah" value="<?= $takdirestui->jumlah ?>"></td>
		</tr>
		<tr>
			<td>tanggal rusak</td>
			<td><input type="date" class="form-control" name="tanggal" value="<?= $takdirestui->tanggal ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="hidden" value="<?= $takdirestui->id_br ?>">
				<button type="submit" class="btn btn-primary">Submit</button>
				<input type="reset" value="reset" class="form-control">
				<input type="button" value="kembali" class="form-control">
			</td>
		</tr>
	</table>
</form>
</div>