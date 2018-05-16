<?php

	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			session_start();
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("dbgy");
		}
		
		function execute($query){
			return mysql_query($query);
		}
		
		function selectAll(){
			$query = "select * from mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "select * from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "update mahasiswa set nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', program='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteUser($id){
			$query = "delete from tb_user where id_user='$id'";
			return $this->execute($query);
		}
		
		function insertUser($nama, $email, $no_hp, $username, $password, $birthDate, $country, $address, $gender){
			$query = "insert into tb_user values ('','$nama', '$email', '$no_hp', '$username', '$password', '$birthDate', '$country', '$address', '$gender','2')";
			return $this->execute($query);
		}
		function insertBarang1($nama, $hargaBeli, $hargaLelang, $deskripsi, $minggu, $periode1, $periode2, $gambar){
			$query = "insert into daftar_barang values ('','$nama', '$hargaBeli', '$hargaLelang', '$deskripsi', '$minggu', '$periode1', '$periode2', '$gambar')";
			return $this->execute($query);
		}
			function getAllProducts(){
		//select semua data yang ada pada table msProduct
			$data = "select nama, email, no_hp, username, ttl, negara, alamat, gender from tb_user";
			return $this->db->get();
	}

		function cekLogin($username, $password){
    		$cek = mysql_query("SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    		if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        		$c = mysql_fetch_array($cek);
        		$_SESSION['username'] = $c['username'];
        		$_SESSION['level'] = $c['level'];
        		if($c['level']==1){
            	header("location:index.php?homeAdmin");
        		}else if($c['level']=="2"){
            	header("location:view\home_user.php");
        		}
    		}else{
         		die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    		}
			// else if($op=="out"){
   //  			unset($_SESSION['username']);
   //  			unset($_SESSION['level']);
   //  			header("location:index.php");
			// }
		}
		
		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>