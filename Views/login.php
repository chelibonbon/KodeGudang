<!DOCTYPE html>
<html>
<head>
<title>Login User</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
  
</head>
<body>
	<div class="container mt-3">
<h3>Login</h3>
<form action="<?= base_url('home/aksi_login') ?>" method="POST">
    <table> 
        <tr> 
            <td>Email</td>
            <td><Input type="email" class="form-control" name="email" placeholder="enter email" ></td>
        </tr>
        <tr> 
            <td>password </td>
            <td><input type="password" class="form-control" name="password" placeholder="enter password" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="login" class="form-control">
            </td>
        </tr>
    </table>
</form>
</div>
</body>
</html>