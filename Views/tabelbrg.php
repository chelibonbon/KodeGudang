 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
  <h3>Tabel Barang</h3>
  <style type="text/css">
  table,
  tr,
  th,
  td{
    border: 1px solid black;
    border-collapse: collapse;
}
  /*button {
    color: #
  }*/
</style>
</head>
<body>
  <table class="table table-hover">
    <thead>
      <tr>
        <th width='3%' align="center">no</th>
        <th align="center">nama barang</th>
        <th align="center">kode barang</th>
        <th align="center">stok</th>
     </tr>
   </thead>
   <tbody>

    <?php
    $ms=1;
    foreach ($takdirestui as $key => $value) {
      ?>
      <tr>
        <td align="center"><?= $ms++ ?></td>
        <td align="center"><?= $value->nama_barang ?></td>
        <td align="center"><?= $value->kode_barang ?></td>
        <td align="center"><?= $value->stok ?></td>
       <?php } ?>
     </tr>
 </tbody>
</table>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>
