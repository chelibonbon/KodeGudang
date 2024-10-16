 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
  <h3>Tabel Barang masuk</h3>
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
        <th align="center">jumlah</th>
        <th align="center">tanggal masuk</th>
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
        <td align="center"><?= $value->jumlah ?></td>
        <td align="center"><?= $value->tanggal ?></td>
       <?php } ?>
     </tr>
 </tbody>
</table>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>
