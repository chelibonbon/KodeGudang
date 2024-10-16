<!DOCTYPE html>
<html>
<head>
	<title>input karyawan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
  
</head>
<body>
	<div class="container mt-3">
<h3>Edit Karyawan</h3>
<form action="<?= base_url('home/simpan_kry') ?>" method="POST">
	<table>
		<tr>
			<td>nama karyawan</td>
			<td><input type="text" class="form-control" name="nama" value="<?= $takdirestui->nama ?>"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" class="form-control" name="email" value="<?= $takdirestui->username ?>"></td>
		</tr>
		<tr>
			<td>level</td>
			<td><input type="number" class="form-control" name="level" value="<?= $takdirestui->level ?>"></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td><input type="number" class="form-control" name="NIK" value="<?= $takdirestui->NIK ?>"></td>
		</tr>
		<tr>
			<td>tempat lahir</td>
			<td><input type="text" class="form-control" name="tempatlahir" value="<?= $takdirestui->tempat_lahir ?>"></td>
		</tr>
		<tr>
			<td>tanggal lahir</td>
			<td><input type="date" class="form-control" name="tanggallahir" value="<?= $takdirestui->tgl_lahir ?>"></td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>
				<select>
				<option>-pilih jenis kelamin</option>
				<option value="L">laki-laki</option>
				<option value="P">perempuan</option  name="jk" value="<?= $takdirestui->jeniskel ?>">
				</select>
			</td>
			<!-- <input type="radio" name="jk" value="<?= $takdirestui->jeniskel ?>"> laki-laki
				<input type="radio" name="jk" value="<?= $takdirestui->jeniskel ?>"> perempuan -->
		</tr>
		<tr>
			<td>alamat</td>
			<td><input type="text" class="form-control" name="alamat" value="<?= $takdirestui->alamat ?>"></td>
		</tr>
		<tr>
			<td>no hp</td>
			<td><input type="number" class="form-control" name="nohp" value="<?= $takdirestui->nohp ?>"></td>
		</tr>
		<tr>
			<td>masa kerja</td>
			<td><input type="text" class="form-control" name="masa" value="<?= $takdirestui->masa_kerja ?>"></td>
		</tr>
		<tr>
			<td>status</td>
			<td><input type="text" class="form-control" name="status" value="<?= $takdirestui->status ?>"></td>
		</tr>
		<tr>
			<td>gaji</td>
			<td><input type="number" class="form-control" name="gaji" value="<?= $takdirestui->gaji ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="hidden" name="id" value="<?= $takdirestui->id_user ?>">
				<button type="submit" class="btn btn-primary">Edit</button>
				<a href="<?= base_url('home/hapus_karyawan/'.$takdirestui->id_user) ?>" class="btn btn-danger">Hapus </a>
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>