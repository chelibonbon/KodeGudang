<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gudang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Table</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tampiluser">user</a></li>
            <li><a class="dropdown-item" href="tampilbarang">barang</a></li>
            <li><a class="dropdown-item" href="tampilbm">barang masuk</a></li>
            <li><a class="dropdown-item" href="tampilbk">barang keluar</a></li>
            <li><a class="dropdown-item" href="tampilkry">karyawan</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
  <h2>User</h2>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id user</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
