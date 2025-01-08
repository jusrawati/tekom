<?php include 'header.php';
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();

?>

<!-- Banner Section start here -->
<section class="banner-section">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-thumb">
                            <img src="assets/images/banner/001.png" alt="Banner-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-content align-middle">

                            <h1><span class="">TEKNIK KOMPUTER - S1<br class="d-none d-lg-block">
                            </span>UNIVERSITAS NEGERI MAKASSAR</h1>

                            <a href="#tentang" class="lab-btn mt-3">Sejarah <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end here -->

<!-- About section start here -->
<section class="about-section padding-tb shape-1" id="tentang">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-content">
                            <div class="header-title text-start m-0">
                                <h5>Sejarah Tentang</h5>
                                <h2 class="mb-0">PROGRAM STUDI TEKNIK KOMPUTER UNIVERSITAS NEGERI MAKASSAR</h2>
                            </div>
                            <h5 class="my-4">Sejarah Singkat Berdirinya</h5>
                            <p><?php echo $data['tentang']; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <div class="img-grp">
                                <div class="about-circle-wrapper">
                                    <div class="about-circle-2"></div>
                                    <div class="about-circle"></div>
                                </div>
                                <div class="about-fg-img">
                                    <img src="assets/images/about/002.png" alt="about-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end here -->

<!-- Feature Section Start Here -->
<section class="feature-section bg-ash padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-1 col-sm-6 col-12"></div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="assets/images/feature/02.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>VISI</h5>
                            <p>Menjadi Program Studi terdepan yang menghasilkan tenaga pendidik dan tenaga ahli profesional, unggul, serta berwawasan teknopreneur bidang teknik informatika dan komputer pada tahun 2025.
							</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="assets/images/feature/02.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>MISI</h5>
                            <p><li>A. Menyelenggarakan pendidikan dan pengajaran dalam bidang teknik informatika dan komputer yang berkualitas sesuai standar pendidikan nasional yang sesuai dengan perkembangan teknologi terkini,</li>
							<li>B. Menumbuhkembangkan jiwa teknoprenuer terutama dalam IT di kalangan mahasiswa dan alumni melalui pendidikan dan pelatihan,</li>
							<li>C. Menyelenggarkan tata kelola program studi yang akuntabel dan transparan,</li>
							<li>D. Menyelenggarakan penelitian dan publikasi di bidang teknik komputer dan informatika yang berkualitas sesuai dengan kebutuhan masyarakat di bidang informatika dan komputer,</li>
                            <li>E. Menyelenggarakan kegiatan pengabdian masyarakat yang berbasis hasil penelitian di bidang komputer dan informatika yang relevan dengan kebutuhan masyarakat terutama pada bidang informatika dan komputer,</li>
                            <li>F. Mengembangkan kemitraan dan memperluas jejaring kerjasama yang dapat bersinergi untuk mendukung tri dharma perguruan tinggi.</li>
                          </p>

                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="lab-item feature-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="assets/images/feature/03.png" alt="feature-image">
                    </div>
                    <div class="lab-content">
                        <h5>TUJUAN</h5>
                        <p><li>Menghasilkan lulusan calon pendidik dalam bidang pendidikan Teknik Informatika dan Komputer yang berkualitas sesuai standar pendidikan nasional yang sesuai dengan perkembangan teknologi terkini,</li>
						<li>Menghasilkan lulusan yang memiliki jiwa kewirausahaan/Teknopreneur terutama dalam IT melalui pendidikan dan pelatihan,</li>
						<li>Menyelenggarkan tata kelola program studi yang akuntabel dan transparan,</li>
						<li>Menghasilkan temuan penelitian dan publikasi ilmiah di bidang Informatika dan Komputer yang berkualitas,</li>
						<li>Menerapkan produk penelitian dalam kegiatan pengabdian masyarakat di bidang informatika dan komputer yang relevan dengan kebutuhan masyarakat,</li>
						<li>Menghasilkan dan memperluas jejaring kerjasama yang dapat bersinergi untuk mendukung Tri Dharma Perguruan Tinggi.</li>
						</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-6 col-12"></div>
    </div>
</div>
</section>
<!-- Feature Section End Here -->





<?php include 'footer.php'; ?>