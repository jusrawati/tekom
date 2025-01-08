    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php 
    include 'db/koneksi.php';
    $param=$_GET['id'];

    if ($param =='a'){ 
    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Mahasiswa Konsentrasi Embedded System</center></p>';
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
    	echo '<th>Konsentrasi</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='A'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_mahasiswa'];'</td>';
    		echo '<td>'.$data3['Rangkaian Elektronika'];'</td>';
    		echo '<td>'.$data3['Sistem Digital'];'</td>';
    		echo '<td>'.$data3['Sistem Mikroprosesor'];'</td>';
    		echo '<td>'.$data3['Jaringan Komputer'];'</td>';
    		echo '<td>'.$data3['Keamanan Informasi'];'</td>';
    		echo '<td>'.$data3['Logika Fuzzy'];'</td>';
    		echo '<td>'.$data3['Pemrograman Web'];'</td>';
    		echo '<td>'.$data3['Pemrograman Mobile'];'</td>';
    		echo '<td>'.$data3['Basis Data'];'</td>';
    		echo '<td><span class="btn btn-success">Embedded System</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    }elseif($param =='b'){ 

    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Mahasiswa Konsentrasi Jaringan dan Forensik</center></p>';
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
    	echo '<th>Konsentrasi</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='B'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_mahasiswa'];'</td>';
    		echo '<td>'.$data3['Rangkaian Elektronika'];'</td>';
    		echo '<td>'.$data3['Sistem Digital'];'</td>';
    		echo '<td>'.$data3['Sistem Mikroprosesor'];'</td>';
    		echo '<td>'.$data3['Jaringan Komputer'];'</td>';
    		echo '<td>'.$data3['Keamanan Informasi'];'</td>';
    		echo '<td>'.$data3['Logika Fuzzy'];'</td>';
    		echo '<td>'.$data3['Pemrograman Web'];'</td>';
    		echo '<td>'.$data3['Pemrograman Mobile'];'</td>';
    		echo '<td>'.$data3['Basis Data'];'</td>';
    		echo '<td><span class="btn btn-success">Jaringan dan Forensik</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    	
    }elseif($param ='c'){ 
    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Mahasiswa Konsentrasi Sistem Cerdas</center></p>';
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
    	echo '<th>Konsentrasi</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='C'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_mahasiswa'];'</td>';
    		echo '<td>'.$data3['Rangkaian Elektronika'];'</td>';
    		echo '<td>'.$data3['Sistem Digital'];'</td>';
    		echo '<td>'.$data3['Sistem Mikroprosesor'];'</td>';
    		echo '<td>'.$data3['Jaringan Komputer'];'</td>';
    		echo '<td>'.$data3['Keamanan Informasi'];'</td>';
    		echo '<td>'.$data3['Logika Fuzzy'];'</td>';
    		echo '<td>'.$data3['Pemrograman Web'];'</td>';
    		echo '<td>'.$data3['Pemrograman Mobile'];'</td>';
    		echo '<td>'.$data3['Basis Data'];'</td>';
    		echo '<td><span class="btn btn-success">Sistem Cerdas</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    }else{
    	echo "Data Tidak Ditemukan";
    }
    ?>
