<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("sijon/head.php") ?>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <nav id="header-navbar" class="navbar navbar-expand-lg py-4">
        <?php $this->load->view("sijon/header.php") ?>
    </nav>

    <div id="side-nav" class="sidenav">
        <?php $this->load->view("sijon/sidenav.php") ?>
    </div>

    <div id="side-search" class="sidenav">
        <?php $this->load->view("sijon/sidesearch.php") ?>
    </div>

    <div class="jumbotron d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-1 mb-4">SI<br>JON</h1>
        </div>
        <div class="rectangle-1"></div>
        <div class="rectangle-2"></div>
        <div class="rectangle-transparent-1"></div>
        <div class="rectangle-transparent-2"></div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="triangle triangle-1">
            <img src="<?php echo base_url('img/obj_triangle.png') ?>" alt="">
        </div>
        <div class="triangle triangle-2">
            <img src="<?php echo base_url('img/obj_triangle.png') ?>" alt="">
        </div>
        <div class="triangle triangle-3">
            <img src="<?php echo base_url('img/obj_triangle.png') ?>" alt="">
        </div>
        <div class="triangle triangle-4">
            <img src="<?php echo base_url('img/obj_triangle.png') ?>" alt="">
        </div>
    </div>

    <!-- Features Section-->
    <section id="features" class="bg-white">
        <div class="container">
            <div class="section-content">
                <!-- Section Title -->
                <div class="title-wrap mb-5" data-aos="fade-up">
                    <h2 class="section-title">
                        What Will You Get ?<a href="https://gettemplates.co" target="_blank"></a>
                    </h2>
                </div>
                <!-- End of Section Title -->
                <div class="row">
                    <!-- Features Holder-->
                    <div class="col-md-10 offset-md-1 features-holder">
                        <div class="row">
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center mt-4">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <i class="lnr lnr-thumbs-up fs-40"></i>
                                    </div>
                                    <h4>Eksplorasi Jurusan</h4>
                                    <p>Temukan jurusan terbaikmu disini, dengan mencoba simulasi soal sesuai dengan
                                        jurusan yang kamu pilih</p>
                                </div>
                            </div>
                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <i class="lnr lnr-bubble fs-40"></i>
                                    </div>
                                    <h4>Tanya Mentor</h4>
                                    <p>Biar makin mantep pilih jurusan yang kamu inginkan. Tanyakan pada mentor
                                        terpercaya!</p>
                                </div>
                            </div>
                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center mt-4">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <i class="lnr lnr-clock fs-40"></i>
                                    </div>
                                    <h4>Eksplorasi Kampus</h4>
                                    <p>asih bingung buat pilih kampus yang sesuai dengan kamu? Temukan kampus terbaikmu
                                        disini!</</p> </div> <!-- End of Feature Item -->
                                </div>
                            </div>
                            <!-- End of Features Holder-->
                        </div>
                    </div>
                </div>
    </section>
    <!-- End of Features Section-->
    <section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(img/bg.jpg);">
    </section>

    <!-- Testimonial Section-->
    <section id="testimonial" class="section-padding bg-fixed bg-white overlay"
        style="background-image: url(<?php echo base_url('img/bg-white.jpg') ?>);">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="heading-section text-center">
                    <h2>
                        User Testimonials
                    </h2>
                </div>
                <div class="row">
                    <!-- Testimonial -->
                    <div class="testi-content testi-carousel owl-carousel">
                        <div class="testi-item text-center">
                            <i class="testi-icon fa fa-3x fa-quote-left"></i>
                            <h4 class="testi-text"><b>Sijon</b> keren banget! jadi bisa tau mana potensi diri <br> yang
                                harus disesuaikan saat ambil jurusan kuliah nanti. </h4>
                            <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                                <div class="testi-img mr-2">
                                    <img src="<?php echo base_url('img/testi-1.jpg') ?>" alt="">
                                </div>
                                <div class="testi-details">
                                    <p class="testi-author mb-0 font-weight-bolder">Adinda Putri Yasmin</p>
                                    <p class="testi-desc mb-0">SMAN 12 BANDUNG</p>
                                </div>
                            </div>

                        </div>
                        <div class="testi-item text-center">
                            <i class="testi-icon fa fa-3x fa-quote-left"></i>
                            <h4 class="testi-text">Sangat membantu bagi siswa yang masih kebingungan memilih jurusan.
                                Dan hasil yang diberikan sangat mendetail.</h4>
                            <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                                <div class="testi-img mr-2">
                                    <img src="<?php echo base_url('img/testi-2.jpg') ?>" alt="">
                                </div>
                                <div class="testi-details">
                                    <p class="testi-author mb-0 font-weight-bolder">Intan Yuntia</p>
                                    <p class="testi-desc mb-0">SMA MUHAMMADIYAH 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item text-center">
                            <i class="testi-icon fa fa-3x fa-quote-left"></i>
                            <h4 class="testi-text">Suka banget, membantu banget buat tau lebih tentang kampus dan
                                jurusan</h4>
                            <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                                <div class="testi-img mr-2">
                                    <img src="<?php echo base_url('img/testi-3.jpg') ?>" alt="">
                                </div>
                                <div class="testi-details">
                                    <p class="testi-author mb-0 font-weight-bolder">Glori</p>
                                    <p class="testi-desc mb-0">Universitas Negeri Malang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial Section-->
    <!-- Portfolio Section -->


    <section id="cta" class="bg-fixed overlay" style="background-image: url(<?php echo base_url('img/background.jpeg') ?>);">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="mb-2">Siap Untuk Menemukan Jurusan dan Kampus Terbaik Versi Kamu?</h2>
                        <a class="btn btn-outline-primary btn-lg" href="explorasi.html">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mastfoot my-3">
        <?php $this->load->view("sijon/footer.php") ?>
    </footer>

    <!-- External JS -->
    <?php $this->load->view("sijon/js.php") ?>

</body>

</html>