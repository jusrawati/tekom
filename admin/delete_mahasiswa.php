

<?php 
include '../db/koneksi.php';
$id=$_GET['id'];

$koneksi->query("DELETE FROM tb_mahasiswa_2 where id_mahasiswa='$id'");

// echo "<script type='text/javascript'>
// setTimeout(function () { 
//     swal({
//         title: 'Data berhasil dihapus.',
//         type: 'success',
//         timer: 3200,
//         showConfirmButton: true
//         });   
//         },10);  
//         window.setTimeout(function(){ 
//             window.location.replace('mahasiswa.php');
//             } ,3200); 
//             </script>";
echo "<div class='alert alert-info'>Data dihapus</div>";
echo "<meta http-equiv='refresh' content='1;url=mahasiswa.php'>";

?>