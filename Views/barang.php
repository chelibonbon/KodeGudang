<!DOCTYPE html>
<html>
<head>
	<title>input barang</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
  
</head>
<body>
	<div class="container mt-3">
<h3>Edit Barang</h3>
<form action="<?= base_url('home/simpan_barang') ?>" method="POST">
	<table> 
		<tr>
			<td>nama barang</td>
			<td><input type="text" class="form-control" name="namabarang" value="<?= $takdirestui->nama_barang ?>"></td>
		</tr>
		<tr>
			<td>kode barang</td>
			<td><input type="number" class="form-control" name="kodebarang" value="<?= $takdirestui->kode_barang ?>"></td>
		</tr>
		<tr>
			<td>stok</td>
			<td><input type="number" class="form-control" name="stok" value="<?= $takdirestui->stok ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="hidden" name="id" value="<?= $takdirestui->id_brg ?>">
				<button type="submit" class="btn btn-primary">Submit</button>
				<input type="reset" value="reset" class="form-control">
				<input type="button" value="kembali" class="form-control">
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>