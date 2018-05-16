<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['signup'])){ //kondisi untuk mengakses halaman edit
		$main->viewSignup();
	}else if(isset($_GET['albums'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->viewAlbums();
	}else if(isset($_GET['login'])){
		$main->viewLogin(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['ceklogin'])){
		$main->login(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['home'])){
		$main->index(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['homeAdmin'])){
		$main->viewhomeAdmin(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['tabelpengguna'])){
		$main->viewtbpengguna(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['inputbarang'])){
		$main->viewInputBarang(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['daftarbarang'])){
		$main->viewDaftarBarang(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['daftarlelang'])){
		$main->viewDaftarLelang(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['deleteU'])){
		$id = $_GET['deleteU'];
		$main->deletePengguna($id); //kondisi untuk mengakses halaman add
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>