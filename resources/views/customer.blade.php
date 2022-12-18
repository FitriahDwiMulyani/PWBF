<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="cust_assets/img/favicon.png" rel="icon">
    <link href="cust_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="cust_assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="cust_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="cust_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="cust_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="cust_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="cust_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="cust_assets/css/style.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <style>
        #map {
            width: 100%;
            height: 500px;
        }

        body {
            margin-top: 20px;
            background: #f8f8f8
        }
    </style>
    <!-- =======================================================
  * Template Name: iPortfolio - v3.9.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="cust_assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#about">Alex Smith</a></h1>
                <div class="social-links mt-3 text-center">
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>My
                                Profile</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bi bi-cart2"></i> <span>Send My
                                Trash</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bi bi-truck"></i> <span>Tracking
                                History</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bi bi-cash-coin"></i>
                            <span>Transaction</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Hai, Alex Smith</h1>
            <h2>Daur ulang apa hari ini?</h2>
            <p>

            </p>
            <a href="#resume" class="btn btn-primary btn-block btn-rounded umami--click--aksipertama-card"
                style="padding-top: 13px;padding-bottom: 13px;" onclick="openSendHowToUsePopup();">Kirim Sekarang</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>My Profile</h2>
                    <div class="account-detail">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="utf-8">
                            <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
                            <!--  All snippets are MIT license http://bootdey.com/license -->
                            <title>bs4 edit profile page - Bootdey.com</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css"
                                rel="stylesheet">
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
                        </head>

                        <body>
                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                                rel="stylesheet">
                            <div class="container">
                                <div class="row flex-lg-nowrap">
                                    <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                                        <div class="card p-3">
                                            <div class="e-navlist e-navlist--active-bg">
                                                <ul class="nav">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="e-profile">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-auto mb-3">
                                                                    <div class="mx-auto" style="width: 140px;">
                                                                        <div class="d-flex justify-content-center align-items-center rounded"
                                                                            style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                            <span
                                                                                style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img
                                                                                    src="cust_assets/img/profile-img.jpg"
                                                                                    alt=""
                                                                                    class="img-fluid rounded-circle"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Alex
                                                                            Smith</h4>
                                                                        <p class="mb-0">@alex.sm</p>
                                                                        <div class="text-muted"><small>Last seen 2
                                                                                hours ago</small></div>
                                                                        <form>
                                                                            <div class="mt-2">
                                                                                <button class="btn btn-primary"
                                                                                    type="button">
                                                                                    <i class="fa fa-fw fa-camera"></i>
                                                                                    <span>Change Photo</span>
                                                                                    <div class="form-floating mb-0.9">
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            id="file">
                                                                                    </div>
                                                                                </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center text-sm-right">

                                                                    <div class="text-muted"><small>Joined 09 Dec
                                                                            2021</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-content pt-3">
                                                            <div class="tab-pane active">
                                                                <form class="form" novalidate="">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Full Name</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            name="name"
                                                                                            placeholder="John Smith"
                                                                                            value="Alex Smith">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Username</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            name="username"
                                                                                            placeholder="alex.sm"
                                                                                            value="alex.sm">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="alexsmith@gmail.com">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Phone Number</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="+62 ">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Address</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Medayu Utara XI No.9">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label><span
                                                                                                class="d-none d-xl-inline">Password</span></label>
                                                                                        <input class="form-control"
                                                                                            type="password"
                                                                                            placeholder="••••••">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                                            <div class="mb-2"><b></b></div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <a href="#about" title="More Details"><i
                                                                        class="btn btn-primary">Save Changes</i></a>
                                                            </div>
                                                        </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 mb-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="px-xl-3">
                                                <button class="btn btn-block btn-secondary">
                                                    <i class="fa fa-sign-out"></i>
                                                    <a href=/home><span>Logout</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title font-weight-bold">Support</h6>
                                            <p class="card-text">Get fast and free help from our friendly assistants.
                                            </p>
                                            <button type="button" class="btn btn-primary">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Send It Now Section ======= -->
        <section id="resume" class="resume">
            <div class="container">
                <div class="section-title">
                    <h2>Send My Trash</h2>
                    <p></p>
                </div>
                <form action="/kirim" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="resume-item pb-0">
                                <h4 class="resume-title">Current Location</h4>
                                <div id="map"></div>
                                <div class="form-group">
                                    <label class="fw-bold mt-3" for="address">Alamat</label>
                                    <input class="form-control" type="text" name="address" id="address"
                                        placeholder="Province, City, District, Postal Code">
                                    <span>Jika alamat tidak terdeteksi atau undefined harap isi alamat secara
                                        manual</span>
                                    <input type="hidden" name="lat" id="lat">
                                    <input type="hidden" name="long" id="long">
                                </div>
                                <div class="form-group">
                                    <label class="fw-bold mt-3" for="phone">Nomor Handphone yang Dapat Dihubungi</label>
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        placeholder="Nomor Handphone">
                                    <span>Isi dengan Format 08XXXXXXXXXX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <h3 class="resume-title"></h3>
                            <div class="resume-item pb-0">
                                <h4 class="resume-title">Input The Data</h4>
                                <div class="form-group">
                                    <label class="fw-bold mt-3" for="address">Jenis Sampah</label>
                                    <select name="jenis" id="account-edit-gender"
                                        class="form-control select-input-account-edit select-input-account-edit-gender">
                                        <option value="L">Kertas</option>
                                        <option value="P">Metal</option>
                                        <option value="L">Plastik</option>
                                        <option value="P">Kaca</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="fw-bold mt-3" for="address">Berat Sampah</label>
                                            <input class="form-control" type="number" name="berat"
                                                placeholder="/kg">
                                        </div>
                                    </div>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Tracking History</h2>
                    <div class="container">
                        <article class="card">
                            <header class="card-header"> My Orders / Tracking </header>
                            <div class="card-body">

                                <article class="card">
                                    <div class="card-body row">
                                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 september
                                            2022
                                        </div>
                                        <div class="col"> <strong>Shipping BY:</strong> <br> ChangeUrWaste, | <i
                                                class="fa fa-phone"></i> 0812 5589 5548 </div>
                                        <div class="col"> <strong>Status:</strong> <br> Picked by the driver </div>

                                    </div>
                                </article>
                                <div class="track">
                                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                                        </span></div>
                                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i>
                                        </span></div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span>
                                    </div>
                                    <div class="step"> <span class="icon"> <i class="bi bi-gift-fill"></i>
                                        </span></div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-warning" data-abc="true"> <i
                                        class="fa fa-chevron-left"></i> Back to orders</a>
                            </div>
                        </article>
                    </div>
        </section><!-- End Services Section -->
        <!-- ======= Portfolio Section ======= -->

        <section id="portofolio" class="portofolio">
            <div class="container">
                <div class="section-title">
                    <h2>Transaction History</h2>
                    <div class="container">
                        <section id="why-us" class="why-us">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Income</span>
                                <h4>Rp 30.000</h4>
                            </div>
                            <article class="card">
                                <link rel="stylesheet" type="text/css"
                                    href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
                                <div class="container bootdey">
                                    <div class="panel panel-default panel-order">
                                        <div class="panel-heading">
                                            <div class="btn-group pull-right">
                                                <div class="btn-group">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="pull-right"><label
                                                                class="label label-danger">Completed</label></div>
                                                        <span><strong>Kind:</strong></span> <span
                                                            class="label label-info">Metals</span><br />
                                                        <span><strong>Weight:</strong></span> <span
                                                            class="label label-info">3kg</span><br />
                                                        <span><strong>Cost:</strong></span> <span
                                                            class="label label-info">Rp
                                                            9000</span><br />
                                                        <a data-placement="top"
                                                            class="btn btn-success btn-xs glyphicon glyphicon-ok"
                                                            href="#" title="View"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                                                            href="#" title="Danger"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-info btn-xs glyphicon glyphicon-usd"
                                                            href="#" title="Danger"></a>
                                                    </div>
                                                    <div class="col-md-12">order made on: 06/12/2021 by <a
                                                            href="#">Alex
                                                            Smith </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="pull-right"><label
                                                                class="label label-info">Processed</label></div>
                                                        <span><strong>Kind:</strong></span> <span
                                                            class="label label-info">Plastics</span><br />
                                                        <span><strong>Weight:</strong></span> <span
                                                            class="label label-info">3kg</span><br />
                                                        <span><strong>Cost:</strong></span> <span
                                                            class="label label-info">Rp
                                                            6000</span><br />
                                                        <a data-placement="top"
                                                            class="btn btn-success btn-xs glyphicon glyphicon-ok"
                                                            href="#" title="View"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                                                            href="#" title="Danger"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-info btn-xs glyphicon glyphicon-usd"
                                                            href="#" title="Danger"></a>
                                                    </div>
                                                    <div class="col-md-12">order made on: 06/12/2021 by <a
                                                            href="#">Alex
                                                            Smith </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="pull-right"><label
                                                                class="label label-success">Completed</label></div>
                                                        <span><strong>Kind:</strong></span> <span
                                                            class="label label-info">Papers</span><br />
                                                        <span><strong>Weight:</strong></span> <span
                                                            class="label label-info">5kg</span><br />
                                                        <span><strong>Cost:</strong></span> <span
                                                            class="label label-info">Rp
                                                            15000</span><br />
                                                        <a data-placement="top"
                                                            class="btn btn-success btn-xs glyphicon glyphicon-ok"
                                                            href="#" title="View"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                                                            href="#" title="Danger"></a>
                                                        <a data-placement="top"
                                                            class="btn btn-info btn-xs glyphicon glyphicon-usd"
                                                            href="#" title="Danger"></a>
                                                    </div>
                                                    <div class="col-md-12">order made on: 06/12/2021 by <a
                                                            href="#">Alex
                                                            Smith </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Portfolio Section -->
                                    <!-- End #main -->

                                    <!-- ======= Footer ======= -->
                                    <!-- All the links in the footer should remain intact. -->
                                    <!-- You can delete the links only if you purchased the pro version. -->
                                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </main>
</body>

<!-- Vendor JS Files -->
<script src="cust_assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="cust_assets/vendor/aos/aos.js"></script>
<script src="cust_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="cust_assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="cust_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="cust_assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="cust_assets/vendor/typed.js/typed.min.js"></script>
<script src="cust_assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="cust_assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="cust_assets/js/main.js"></script>

<script>
    let mymap = null;
    let accessToken = 'pk.eyJ1Ijoicml3YWxzeWFtIiwiYSI6ImNrajB5c21obTF1ZmQycnAyOTY3N2VycXUifQ.DAfn6MTxzf_BU3lqD0fIgQ'

    const init = async () => {
        let tileLayer = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery© <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                maxZoom: 18,
                tileSize: 512,
                zoomOffset: -1,
                accessToken: accessToken
            });

        navigator.geolocation.getCurrentPosition(function(location) {
            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
            var address = location.address;
            document.getElementById('lat').value = location.coords.latitude;
            document.getElementById('long').value = location.coords.longitude;
            document.getElementById('address').value = address;
            var mymap = L.map('map', {
                layers: [
                    tileLayer,
                ]
            }).setView(latlng, 17);
            var marker = L.marker(latlng).addTo(mymap);

            // get coordinate
            var lat, lng, marker;
            mymap.addEventListener('click', (e) => {
                if (marker) mymap.removeLayer(marker);
                lat = e.latlng.lat;
                lng = e.latlng.lng;
                marker = L.marker([lat, lng]).addTo(mymap);
                $('#lat').val(JSON.stringify(lat));
                $('#long').val(JSON.stringify(lng));
                console.log(point);
            });
        });

    }
    init();
</script>

</html>
