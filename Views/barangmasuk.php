<!DOCTYPE html>
<html>
<head>
	<title>input barang masuk</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
  
</head>
<body>
	<div class="container mt-3">
<h3>Edit barang masuk</h3>
<form action="<?= base_url('home/simpan_bm') ?>" method="POST">
	<table> 
		<tr>
			<td>id barang</td>
			<td><input type="number" class="form-control" name="idbarang" value="<?= $takdirestui->id_brg ?>"></td>
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
			<td><input type="hidden" value="<?= $takdirestui->id_bm ?>" name="id">
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