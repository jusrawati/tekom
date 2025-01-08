<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>           
<?php 
include '../db/koneksi.php';
$id=$_GET['id'];
$koneksi->query("UPDATE tb_mahasiswa_2 set nama_mahasiswa='$_POST[nama]',
Rangkaian_Elektronika='$_POST[Rangkaian_Elektronika]',  
Sistem_Digital='$_POST[Sistem_Digital]', 
Sistem_Mikroprosesor='$_POST[Sistem_Mikroprosesor]', 
Jaringan_Komputer='$_POST[Jaringan_Komputer]', 
Keamanan_Informasi='$_POST[Keamanan_Informasi]', 
Logika_Fuzzy='$_POST[Logika_Fuzzy]', 
Pemrograman_Web='$_POST[Pemrograman_Web]', 
Pemrograman_Mobile='$_POST[Pemrograman_Mobile]', 
Basis_Data='$_POST[Basis_Data]' 
where id_mahasiswa='$id'");


echo "<div class='alert alert-info'>Data Tersimpan</div>";
echo "<meta http-equiv='refresh' content='1;url=nilai.php'>";

?>