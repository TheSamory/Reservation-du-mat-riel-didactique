<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head_link')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="">Myiuc</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>{{session('prenom_etud')}}</li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="#">Logout {{session('id_etud')}}</a>
        </div>
    </header>

    <main class="main">

        <!-- Catégorie Section -->
        <section id="features" class="features section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Catégories</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                            <h3><a href="#electronique" class="stretched-link">Elèctronique</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="features-item">
                            <i class="bi bi-command" style="color: #b2904f;"></i>
                            <h3><a href="#chimique" class="stretched-link">Chimique</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="features-item">
                            <i class="bi bi-dribbble" style="color: #b20969;"></i>
                            <h3><a href="#sportif" class="stretched-link">Sport</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="features-item">
                            <i class="bi bi-activity" style="color: #ff5828;"></i>
                            <h3><a href="#medical" class="stretched-link">Médical</a></h3>
                        </div>
                    </div><!-- End Feature Item -->
                </div>
            </div>
        </section>
        <!-- End catégorie Section -->



        <!-- VP Section -->
        <section id="electronique" class="courses section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p class="">Vidéo Projecteur</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row">
                    @foreach($data_mat as $d)
                    <div class="col-lg-4 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{$d->file_name}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="/reservation/{{$d->id}} ">
                                        <p class="category">Reserver</p>
                                    </a>
                                    <p class="price">{{$d->statut}}</p>
                                </div>
                                <h3>{{$d->reference}}</h3>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section><!-- /VP Section -->


        <!-- /chimique Section -->
        <section id="chimique" class="courses section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p class="">Matériels Chimique</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row">
                    @foreach($data_mat_ch as $d)
                    <div class="col-lg-4 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{$d->file_name}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="/reservation/{{$d->id}} ">
                                        <p class="category">Reserver</p>
                                    </a>
                                    <p class="price">{{$d->statut}}</p>
                                </div>
                                <h3>{{$d->reference}}</h3>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /chimique Section -->


        <!-- /medical Section -->
        <section id="medical" class="courses section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p class="">Matériels Médical</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row">
                    @foreach($data_mat_me as $d)
                    <div class="col-lg-4 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{$d->file_name}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="/reservation/{{$d->id}} ">
                                        <p class="category">Reserver</p>
                                    </a>
                                    <p class="price">{{$d->statut}}</p>
                                </div>
                                <h3>{{$d->reference}}</h3>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /medical Section -->


        <!-- /sport Section -->
        <section id="sportif" class="courses section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p class="">Matériels Sportif</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row">
                    @foreach($data_mat_sp as $d)
                    <div class="col-lg-4 col-md-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{$d->file_name}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="/reservation/{{$d->id}} ">
                                        <p class="category">Reserver</p>
                                    </a>
                                    <p class="price">{{$d->statut}}</p>
                                </div>
                                <h3>{{$d->reference}}</h3>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /sport Section -->
    </main>




    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('include.foot_link')

</body>

</html>