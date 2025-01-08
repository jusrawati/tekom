    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    include '../db/koneksi.php';
    
    echo '<div class="table-responsive">';
    echo '<div class="grid-title">';
    echo '<p><center>Daftar Mahasiswa Program Studi Teknik Komputer</center></p>';
    echo '</div>';
    echo '<table class="table table-bordered table-striped">';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>Nama Lengkap</th>';
    echo '<th>Rangkaian Elektronika</th>';
    echo '<th>Sistem Digital</th>';
    echo '<th>Sistem Mikroprosesor</th>';
    echo '<th>Jaringan Komputer</th>';
    echo '<th>Keamanan Informasi</th>';
    echo '<th>Logika Fuzzy</th>';
    echo '<th>Pemrograman Web</th>';
    echo '<th>Pemrograman Mobile</th>';
    echo '<th>Basis Data</th>';
    	
    
    echo '</tr>';
    $nomor=1;
    $ambil3=$koneksi->query("SELECT * FROM tb_mahasiswa_2");
    while ($data3=$ambil3->fetch_array()){

        echo '<tr>';
        echo '<td>'.$nomor++;'</td>';
		echo '<td>'.$data3['nama_mahasiswa'];'</td>';
    	echo '<td>'.$data3['Rangkaian_Elektronika'];'</td>';
    	echo '<td>'.$data3['Sistem_Digital'];'</td>';
    	echo '<td>'.$data3['Sistem_Mikroprosesor'];'</td>';
    	echo '<td>'.$data3['Jaringan_Komputer'];'</td>';
    	echo '<td>'.$data3['Keamanan_Informasi'];'</td>';
    	echo '<td>'.$data3['Logika_Fuzzy'];'</td>';
    	echo '<td>'.$data3['Pemrograman_Web'];'</td>';
    	echo '<td>'.$data3['Pemrograman_Mobile'];'</td>';
    	echo '<td>'.$data3['Basis_Data'];'</td>';
        echo '</tr>';
    };
    echo '</table>';

    echo '</div>';
    echo '<script> window.print();</script>';
?>