<?php

namespace App\Controllers;
use App\Models\M_gudang;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function wendy()
	{
		echo "tak suka cewek";
	}
	public function guser()
	{
		echo view ('header.php');
		echo view ('guser.php');
		echo view ('footer.php');
	}
	public function barang()
	{
		echo view ('header.php');
		echo view('barang.php');
		echo view ('footer.php');
	}
	public function barangmasuk()
	{
		echo view ('header.php');
		echo view('barangmasuk.php');
		echo view ('footer.php');
	}
	public function barangkeluar()
	{
		echo view ('header.php');
		echo view('barangkeluar.php');
		echo view ('footer.php');
	}
	public function login()
	{
		return view('login');
	}
	public function aksi_login()
	{
		$a=$this->request->getPost('email');
		$b=$this->request->getPost('password');

		$Joyce= new M_gudang;
		$data = array(
				"username"=>$a,
				"password"=>$b
				);

		$cek = $Joyce->getWhere('user', $data);
		//$cek uhh//
		//ini karena kitaa nyetak, harus menggunahkan echo, kalau error, karena di model tak ada Array akhirnya//
		if ($cek != null) {
		
		session()->set('id', $cek->id_user);
		session()->set('u', $cek->username);
		session()->set('level', $cek->level);

			//penulisan kode array isinya pakai $cek[isinya]//
		 	return redirect ()->to('home/dashboard');
		 }else{
		 	return redirect ()->to('home/login');
		 }
	}
	public function logout()
	{
		session()->destroy();
		return redirect ()->to('home/login');
	}
	public function barangrusak()
	{
		echo view ('header.php');
		echo view('barangrusak.php');
		echo view ('footer.php');
	}
	public function tampiluser()
	{
		return view('tampiluser.php');
	}
	public function tampilbarang()
	{
		return view('tampilbarang.php');
	}
	public function tampilbm()
	{
		return view('tampilbm.php');
	}
	public function tampilbk()
	{
		return view('tampilbk.php');
	}
	public function tampilkry()
	{
		return view('tampilkry.php');
	}
	public function dashboard()
	{	
		if (session()->get('id')>0) {
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashboard.php');
		echo view ('footer.php');

	}else{
		return redirect()->to('home/login');
		}
	}
	public function usr()
	{
		if (session()->get('level')==1) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('user');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('reset.php',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function lbrg()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('lbrg.php');
		echo view ('footer.php');
	}
	public function tabelbrg()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> tampil('barang');
		echo view ('tabelbrg.php',$wendy);
	}
	public function lbm()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('lbm.php');
		echo view ('footer.php');
	}
	public function tabelbm()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_masuk', 'barang', 'brg_masuk.id_brg=barang.id_brg');
		echo view ('tabelbm.php',$wendy);
	}
	public function lbk()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('lbk.php');
		echo view ('footer.php');
	}
	public function tabelbk()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_keluar', 'barang', 'brg_keluar.id_brg=barang.id_brg');
		echo view ('tabelbk.php',$wendy);
	}
	public function lbr()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('lbr.php');
		echo view ('footer.php');
	}
	public function tabelbr()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_rusak', 'barang', 'brg_rusak.id_brg=barang.id_brg');
		echo view ('tabelbr.php',$wendy);
	}
	public function dashbarang()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('barang');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashbarang.php',$wendy);
		echo view ('footer.php');
	}
	//input barang itu di view "tambah_barang"//
	public function input_barang()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_barang.php');
		echo view ('footer.php');
	}
	public function simpan_barang1()
	{
		$a=$this->request->getPost('namabarang');
		$b=$this->request->getPost('kodebarang');
		$c=$this->request->getPost('stok');
		$Joyce= new M_gudang;
		$data = array(
				"nama_barang"=>$a,
				"kode_barang"=>$b,
				"stok"=>$c
				);
		$Joyce->input('barang',$data);
		return redirect ()->to('home/dashbarang');
		}
	public function hapus_barang($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_brg' =>$id);
		$wendy['takdirestui']=$Joyce->hapus('barang',$wece);
		return redirect()->to('home/dashbarang');
	}
	public function edit_barang($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_brg' =>$id);
		$wendy['takdirestui']=$Joyce->getWhere('barang',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('barang',$wendy);
		echo view ('footer.php');
		//echo view "barang", itu dari view, bukan database gudang//
		}
	public function simpan_barang()
	{
		$a=$this->request->getPost('namabarang');
		$b=$this->request->getPost('kodebarang');
		$c=$this->request->getPost('stok');
		$id=$this->request->getPost('id');
		$Joyce= new M_gudang;
		$wece= array('id_brg' =>$id);
		$data = array(
				"nama_barang"=>$a,
				"kode_barang"=>$b,
				"stok"=>$c
				);
		$Joyce->edit('barang',$data, $wece);
		return redirect ()->to('home/dashbarang');
		}
	public function dashbarangm()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3 || session()->get('level')==4) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_masuk', 'barang', 'brg_masuk.id_brg=barang.id_brg');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashbarangm.php',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function input_bm()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('barang');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_barangmasuk.php',$wendy);
		echo view ('footer.php');
	}
	public function simpan_bm1()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$Joyce= new M_gudang();
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->input('brg_masuk',$data);
		return redirect ()->to('home/dashbarangm');
	}
	public function hapus_barangmasuk($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_bm' =>$id);
		$wendy['takdirestui']=$Joyce->hapus('brg_masuk',$wece);
		return redirect()->to('home/dashbarangm');
	}
	public function edit_barangmasuk($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_bm' =>$id);
		$wendy['takdirestui']=$Joyce->getWhere('brg_masuk',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('barangmasuk',$wendy);
		echo view ('footer.php');
	}
	public function simpan_bm()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$id=$this->request->getPost('id');
		$Joyce= new M_gudang;
		$wece= array('id_bm' =>$id);
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->edit('brg_masuk',$data, $wece);
		return redirect ()->to('home/dashbarangm');
	}
	public function dashbarangk()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3 || session()->get('level')==5) {
		// if (session()->get('id')>0) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_keluar', 'barang', 'brg_keluar.id_brg=barang.id_brg');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashbarangk.php',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function input_bk()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('barang');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_barangkeluar.php', $wendy);
		echo view ('footer.php');
	}
	public function simpan_bk1()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$Joyce= new M_gudang;
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->input('brg_keluar',$data);
		return redirect ()->to('home/dashbarangk');
	}
	public function hapus_barangkeluar($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_bk' =>$id);
		$wendy['takdirestui']=$Joyce->hapus('brg_keluar',$wece);
		return redirect()->to('home/dashbarangk');
	}
	public function edit_barangkeluar($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_bk' =>$id);
		$wendy['takdirestui']=$Joyce->getWhere('brg_keluar',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('barangkeluar',$wendy);
		echo view ('footer.php');
	}
	public function simpan_bk()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$id=$this->request->getPost('id');
		$Joyce= new M_gudang;
		$wece= array('id_bk' =>$id);
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->edit('brg_keluar',$data, $wece);
		return redirect ()->to('home/dashbarangk');
	}
	public function dashbarangr()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3 || session()->get('level')==4) {
		// if (session()->get('id')>0) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce-> join ('brg_rusak', 'barang', 'brg_rusak.id_brg=barang.id_brg');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashbarangr.php',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function input_br()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('barang');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_barangrusak.php', $wendy);
		echo view ('footer.php');
	}
	public function simpan_br1()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$Joyce= new M_gudang;
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->input('brg_rusak',$data);
		return redirect ()->to('home/dashbarangr');
	}
	public function hapus_barangrusak($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_br' =>$id);
		$wendy['takdirestui']=$Joyce->hapus('brg_rusak',$wece);
		return redirect()->to('home/dashbarangr');
	}
	public function edit_barangrusak($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_br' =>$id);
		$wendy['takdirestui']=$Joyce->getWhere('brg_rusak',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('barangrusak',$wendy);
		echo view ('footer.php');
	}
	public function simpan_br()
	{
		$a=$this->request->getPost('idbarang');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('tanggal');
		$id=$this->request->getPost('id');
		$Joyce= new M_gudang;
		$wece= array('id_br' =>$id);
		$data = array(
				"id_brg"=>$a,
				"jumlah"=>$b,
				"tanggal"=>$c
				);
		$Joyce->edit('brg_rusak',$data, $wece);
		return redirect ()->to('home/dashbarangr');
	}
	public function dashuser()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('user');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashuser.php',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function input_user()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_guser.php');
		echo view ('footer.php');
	}
	public function simpan_user1()
	{
		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
		$c=$this->request->getPost('level');
		$Joyce= new M_gudang;
		$data = array(
				"username"=>$a,
				"password"=>$b,
				"level"=>$c
				);
		$Joyce->input('user',$data);
		return redirect ()->to('home/dashuser');
	}
	public function hapus_user($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_user' =>$id);
		$wendy['takdirestui']=$Joyce->hapus('user',$wece);
		return redirect()->to('home/dashuser');
	}
	public function edit_user($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_user' =>$id);
		$wendy['takdirestui']=$Joyce->getWhere('user',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('guser',$wendy);
		echo view ('footer.php');
	}
	public function simpan_user()
	{
		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
		$c=$this->request->getPost('level');
		$id=$this->request->getPost('id');
		$Joyce= new M_gudang;
		$wece= array('id_user' =>$id);
		$data = array(
				"username"=>$a,
				"password"=>$b,
				"level"=>$c
				);
		$Joyce->edit('user',$data, $wece);
		return redirect ()->to('home/dashuser');
	}
	public function dashkaryawan()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->join ('karyawan', 'user', 'karyawan.id_user=user.id_user');
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('dashkaryawan',$wendy);
		echo view ('footer.php');
	}else if (session()->get('level')>0) {
		return redirect()->to('home/error');
	}else{
		return redirect()->to('home/login');
		}
	}
	public function input_kry()
	{
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('tambah_karyawan.php');
		echo view ('footer.php');
	}
	public function simpan_kry1()
	{
		$a=$this->request->getPost('nama');
		$b=$this->request->getPost('email');
		$c=$this->request->getPost('password');
		$d=$this->request->getPost('level');
		$e=$this->request->getPost('NIK');
		$f=$this->request->getPost('tempatlahir');
		$g=$this->request->getPost('tanggallahir');
		$h=$this->request->getPost('jk');
		$i=$this->request->getPost('alamat');
		$j=$this->request->getPost('nohp');
		$k=$this->request->getPost('masa');
		$l=$this->request->getPost('status');
		$m=$this->request->getPost('gaji');
		$Joyce= new M_gudang;
		
		$data = array(
				"username"=>$b,
				"password"=>$c,
				"level"=>$d
				);
		$Joyce->input('user', $data);

		$where = array(
				"username"=>$b
				);
		$wendy=$Joyce->getWhere('user', $where);
		// echo $wendy->id_user;
		$data2=array(
			"id_user"=>$wendy->id_user,
			"nama"=>$a,
			"NIK"=>$e,
			"tempat_lahir"=>$f,
			"tgl_lahir"=>$g,
			"jeniskel"=>$h,
			"alamat"=>$i,
			"nohp"=>$j,
			"masa_kerja"=>$k,
			"status"=>$l,
			"gaji"=>$m
		);
		// print_r($data2);
		$Joyce->input('karyawan', $data2);
		return redirect ()->to('home/dashkaryawan');
		}
	public function hapus_karyawan ($id)
	{
		$Joyce= new M_gudang;
		$wece= array('id_user' =>$id);
		$Joyce->hapus('karyawan',$wece);
		$Joyce->hapus('user',$wece);
		return redirect()->to('home/dashkaryawan');
	}
	public function edit_karyawan ($id)
	{
		$Joyce= new M_gudang;
		$wece= array('karyawan.id_user' =>$id);
		$wendy['takdirestui']=$Joyce->joinw('karyawan', 'user', 'karyawan.id_user=user.id_user', $wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('karyawan',$wendy);
		echo view ('footer.php');
	}
	public function simpan_kry()
	{
		$a=$this->request->getPost('nama');
		$b=$this->request->getPost('email');
		$d=$this->request->getPost('level');
		$e=$this->request->getPost('NIK');
		$f=$this->request->getPost('tempatlahir');
		$g=$this->request->getPost('tanggallahir');
		$h=$this->request->getPost('jk');
		$i=$this->request->getPost('alamat');
		$j=$this->request->getPost('nohp');
		$k=$this->request->getPost('masa');
		$l=$this->request->getPost('status');
		$m=$this->request->getPost('gaji');
		$id=$this->request->getPost('id');
		
		$where = array(
				"id_user"=>$id
				);
		$Joyce= new M_gudang;
		$data = array(
				"username"=>$b,
				"level"=>$d
				);
		$Joyce->edit('user', $data, $where);
		// echo $wendy->id_user;
		$data2=array(
			"nama"=>$a,
			"NIK"=>$e,
			"tempat_lahir"=>$f,
			"tgl_lahir"=>$g,
			
			"alamat"=>$i,
			"nohp"=>$j,
			"masa_kerja"=>$k,
			"status"=>$l,
			"gaji"=>$m
		);
		print_r($where);
		$Joyce->edit('karyawan', $data2, $where);
		return redirect ()->to('home/dashkaryawan');
	}
	//user dibawah ini dari tugas mengikut video orang//
	public function user()
	{
		$Joyce= new M_gudang;
		$wendy['takdirestui']=$Joyce->tampil('user');
		echo view ('user',$wendy);
		}
	public function tambah_user()
	{
		echo view ('tambah_user');
	}
	public function aksi_user()
	{
		$model= new M_gudang();
		$data = array (
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
			'level' => $this->request->getPost('level'),
		);
		$model->saveUser($data);
		return redirect()->to('/home/user');
	//sampai sini//
	}
}