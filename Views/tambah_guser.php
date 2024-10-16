<div class="container mt-3">
<h3>Tambah User</h3>
<form action="<?= base_url('home/simpan_user1') ?>" method="POST">
	<table>
		<tr>
			<td>username</td>
			<td><input type="text" class="form-control" name="username" value="<?= $takdirestui->username ?>"></td>
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
			<td></td>
			<td><input type="hidden" value="<?= $takdirestui->id_user ?>">
				<button type="submit" class="btn btn-primary">Submit</button>
				<input type="reset" value="reset" class="form-control">
				<input type="button" value="kembali" class="form-control">
			</td>
		</tr>
	</table>
</form>
</div>