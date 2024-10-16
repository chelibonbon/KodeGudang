<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<button><a href="/Home/tambah_user">Upload Data</a></button>
<table class="table table-hover">
    <thead>
      <tr>
        <th width='3%'>no</th>
        <th>username</th>
        <th>password</th>
        <th width='5%'>level</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $ms=1;
    foreach ($takdirestui as $key => $value) {
      ?>
      <tr>
        <td><?= $ms++ ?></td>
        <td><?= $value->username ?></td>
        <td><?= $value->password ?></td>
        <td><?= $value->level ?></td>
        <td>
          <button class="btn btn-warning">Edit</button>
          <button class="btn btn-danger">Hapus</button>
      </td>
    </tr>
<?php
}
?>

    </tbody>
  </table>
</body>
</html>