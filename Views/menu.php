<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home/dashboard">
          <i class="fas fa-home"></i>
          Home</a>
        </li>
        
        <?php
        if(session()->get('level')==1) {
         ?>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-table"></i>
          Data Master</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/home/dashbarang">Barang</a></li>
            <li><a class="dropdown-item" href="/home/dashkaryawan">Karyawan</a></li>
             <li><a class="dropdown-item" href="/home/usr">Reset password</a></li>
          </ul>
        </li>
      <?php } ?>
      <?php
        if(session()->get('level')==1 || session()->get('level')==3){
         ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-cash-register"></i>
          Transaksi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/home/dashbarangm">Barang Masuk</a></li>
            <li><a class="dropdown-item" href="/home/dashbarangk">Barang Keluar</a></li>
            <li><a class="dropdown-item" href="/home/dashbarangr">Barang Rusak</a></li>
          </ul>
        </li>
         <?php } ?>
         <?php
         if (session()->get('level')==1 || session()->get('level')==4 || session()->get('level')==5 || session()->get('level')==2){
          ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-clipboard-list"></i>
          Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/home/lbrg">Barang</a></li>
            <li><a class="dropdown-item" href="/home/lbm">Barang Masuk</a></li>
            <li><a class="dropdown-item" href="/home/lbk">Barang Keluar</a></li>
            <li><a class="dropdown-item" href="/home/lbr">Barang Rusak</a></li>
          </ul>
        </li>
          <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="/home/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>