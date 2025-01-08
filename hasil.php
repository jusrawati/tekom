<?php include 'header.php';
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();

?>

<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">Pengumuman Hasil Pembagian Konsentrasi</h4>
            <ul class="lab-ul">
                <li><a href="index.php">Home</a></li>
                <li><a class="active">Hasil Seleksi</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Gallary section start here-->
<div class="gallery-section padding-tb">
    <div class="container">
        <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
            <li class="filter-btn is-checked" data-filter="*">Semua Mahasiswa <span class="filter-item-num">146</span></li>
            <li class="filter-btn" data-filter=".ula">Konsentrasi Embedded System<span class="filter-item-num">13</span>
            </li>
            <li class="filter-btn" data-filter=".wustho">Konsentrasi Jaringan dan Forensik<span class="filter-item-num">30</span>
            </li>
            <li class="filter-btn" data-filter=".ulya">Konsentrasi Sistem Cerdas<span class="filter-item-num">103</span></li>
        </ul>
        <div class="col-lg-12 grid">
            <div class="grid-item ula">
                <div class="grid-inner">
                    <div class="grid-thumb">
                        <div class="table-responsive">
                            <div class="grid-title">
                                <h3><center>Daftar Mahasiswa Konsentrasi Embedded System</center></h3>
                                <a style="float-right;" href="cetak.php?id=a" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                                <br>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Rangkaian Elektronika</th>
                                    <th>Sistem Digital</th>
                                    <th>Sistem Mikroprosesor</th>
                                    <th>Jaringan Komputer</th>
                                    <th>Keamanan Informasi</th>
									<th>Logika Fuzzy</th>
                                    <th>Pemrograman Web</th>
                                    <th>Pemrograman Mobile</th>
                                    <th>Basis Data</th>
                                    <th>Konsentrasi</th>

                                </tr>
                                <?php $nomor=1;
                                $ambil=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='A'");
                                while ($data=$ambil->fetch_array()){

                                   ?>
                                   <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nama_mahasiswa']; ?></td>
                                    <td><?php echo $data['Rangkaian Elektronika']; ?></td>
                                    <td><?php echo $data['Sistem Digital']; ?></td>
                                    <td><?php echo $data['Sistem Mikroprosesor']; ?></td>
                                    <td><?php echo $data['Jaringan Komputer']; ?></td>
                                    <td><?php echo $data['Keamanan Informasi']; ?></td>
                                    <td><?php echo $data['Logika Fuzzy']; ?></td>
                                    <td><?php echo $data['Pemrograman Web']; ?></td>
                                    <td><?php echo $data['Pemrograman Mobile']; ?></td>
                                    <td><?php echo $data['Basis Data']; ?></td>
                                    <td><span class="btn btn-success">Embedded System</span></td>
                                </tr>
                            <?php }; ?>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <div class="grid-item wustho">
            <div class="grid-inner">
                <div class="grid-thumb">
                    <div class="table-responsive">
                        <div class="grid-title">
                            <h3><center>Daftar Mahasiswa Konsentrasi Jaringan dan Forenaik</center></h3>
                            <a style="float-right;" href="cetak.php?id=b" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                            <br>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Rangkaian Elektronika</th>
                                <th>Sistem Digital</th>
                                <th>Sistem Mikroprosesor</th>
                                <th>Jaringan Komputer</th>
                                <th>Keamanan Informasi</th>
								<th>Logika Fuzzy</th>
                                <th>Pemrograman Web</th>
                                <th>Pemrograman Mobile</th>
                                <th>Basis Data</th>
                                <th>Konsentrasi</th>

                            </tr>
                            <?php $nomor=1;
                            $ambil2=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='B'");
                            while ($data2=$ambil2->fetch_array()){

                               ?>
                               <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data2['nama_mahasiswa']; ?></td>
                                <td><?php echo $data2['Rangkaian Elektronika']; ?></td>
                                <td><?php echo $data2['Sistem Digital']; ?></td>
                                <td><?php echo $data2['Sistem Mikroprosesor']; ?></td>
                                <td><?php echo $data2['Jaringan Komputer']; ?></td>
                                <td><?php echo $data2['Keamanan Informasi']; ?></td>
                                <td><?php echo $data2['Logika Fuzzy']; ?></td>
                                <td><?php echo $data2['Pemrograman Web']; ?></td>
                                <td><?php echo $data2['Pemrograman Mobile']; ?></td>
                                <td><?php echo $data2['Basis Data']; ?></td>
                                <td><span class="btn btn-success">Jaringan dan Forensik</span></td>
                            </tr>
                        <?php }; ?>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="grid-item ulya">
        <div class="grid-inner">
            <div class="grid-thumb">
                <div class="table-responsive">
                    <div class="grid-title">
                        <h3><center>Daftar Mahasiswa Konsentrasi Sistem Cerdas</center></h3>
                        <a style="float-right;" href="cetak.php?id=c" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                        <br>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Rangkaian Elektronika</th>
                            <th>Sistem Digital</th>
                            <th>Sistem Mikroprosesor</th>
                            <th>Jaringan Komputer</th>
                            <th>Keamanan Informasi</th>
							<th>Logika Fuzzy</th>
                            <th>Pemrograman Web</th>
                            <th>Pemrograman Mobile</th>
                            <th>Basis Data</th>
                            <th>Konsentrasi</th>

                        </tr>
                        <?php $nomor=1;
                        $ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering_2 join tb_mahasiswa_2 where tb_hasil_clustering_2.id_mahasiswa = tb_mahasiswa_2.id_mahasiswa and tb_hasil_clustering_2.cluster='C'");
                        while ($data3=$ambil3->fetch_array()){

                           ?>
                           <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data3['nama_mahasiswa']; ?></td>
                            <td><?php echo $data3['Rangkaian Elektronika']; ?></td>
                            <td><?php echo $data3['Sistem Digital']; ?></td>
                            <td><?php echo $data3['Sistem Mikroprosesor']; ?></td>
                            <td><?php echo $data3['Jaringan Komputer']; ?></td>
                            <td><?php echo $data3['Keamanan Informasi']; ?></td>
                            <td><?php echo $data3['Logika Fuzzy']; ?></td>
                            <td><?php echo $data3['Pemrograman Web']; ?></td>
                            <td><?php echo $data3['Pemrograman Mobile']; ?></td>
                            <td><?php echo $data3['Basis Data']; ?></td>
                            <td><span class="btn btn-success">Sistem Cerdas</span></td>
                        </tr>
                    <?php }; ?>
                </table>

            </div>
        </div>

    </div>
</div>

</div>
</div>
</div>
<!-- Gallary section end here-->

<?php include 'footer.php'; ?>