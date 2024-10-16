<div class="container mt-3">
<h3>Tambah Karyawan</h3>
<form action="<?= base_url('home/simpan_kry1') ?>" method="POST">
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
			<td>password</td>
			<td><input type="password" class="form-control" name="password" value="<?= $takdirestui->password ?>"></td>
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
			<td><input type="hidden" value="<?= $takdirestui->id_kry ?>">
				<button type="submit" class="btn btn-primary">Submit</button>
				<input type="reset" value="reset" class="form-control">
				<input type="button" value="kembali" class="form-control">
			</td>
		</tr>
	</table>
</form>
</div>