<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			include "view/home.php"; //memamnggil view.php pada folder view
		}
		
		function viewSignup(){
			include "view/form.php"; //menampilkan halaman untuk mengedit data
		}
		function viewhomeAdmin(){
			include "view/home_admin2.php"; //menampilkan halaman untuk mengedit data
		}
		function viewtbpengguna(){
			include "view/table_pengguna.php"; //menampilkan halaman untuk mengedit data
		}
		function viewInputBarang(){
			include "view/inputBarang.php"; //menampilkan halaman untuk mengedit data
		}
		function viewDaftarBarang(){
			include "view/daftar_barang.php"; //menampilkan halaman untuk mengedit data
		}
		function viewDaftarLelang(){
			include "view/daftar_lelang.php"; //menampilkan halaman untuk mengedit data
		}
		function viewAlbums(){
			include "view/albums.php"; //menampilkan halaman untuk mengedit data
		}
		function viewLogin(){
			include "view/login.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			include "view/view_add.php"; //menampilkan halaman add data
		}
		function viewPengguna(){
			$data['listProducts'] = $this->model->getAllProducts(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
			$this->load->view('table_pengguna', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		}
		
		//fungsi updata data
		function update(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			
			$update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
			header("location:index.php");
		}
		
		function deletePengguna($id){
			$delete = $this->model->deleteUser($id);
			header("location:index.php?tabelpengguna=$row[0]");
		}
		function login(){
			$user = $_POST['username'];
			$pw = $_POST['password'];	
			$login = $this->model->cekLogin($user, $pw);
			
		}
		
		function insert(){
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$no_hp = $_POST['hp'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$birthDate = $_POST['ttl'];
			$country = $_POST['negara'];
			$address = $_POST['alamat'];
			$gender = $_POST['gender'];
			
			$insert = $this->model->insertUser($nama, $email, $no_hp, $username, $password, $birthDate, $country, $address, $gender);
			header("location:index.php");
		}
		function insertBarang(){
			$nama = $_POST['namaBarang'];
			$hargaBeli = $_POST['hargaBeli'];
			$hargaLelang = $_POST['hargaLelang'];
			$deskripsi = $_POST['deskripsi'];
			$minggu = $_POST['week'];
			$periode1 = $_POST['periode1'];
			$periode2 = $_POST['periode2'];
			$gambar = $_POST['gambar'];
			
			$insert = $this->model->insertBarang1($nama, $hargaBeli, $hargaLelang, $deskripsi, $minggu, $periode1, $periode2, $gambar);
			header("location:index.php");
		}
		
		function __destruct(){
		}
	}
?>