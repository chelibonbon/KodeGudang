<!DOCTYPE html>
<html>
<head>
	<title>input user</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
  
</head>
<body>
	<div class="container mt-3">
<h3>Edit User</h3>
<form action="<?= base_url('home/simpan_user') ?>" method="POST">
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
			<td><input type="hidden" name="id" value="<?= $takdirestui->id_user ?>">
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