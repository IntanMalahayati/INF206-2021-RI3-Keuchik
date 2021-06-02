<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Pengajuan Kegiatan/Acara Desa</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="assets/css/index.css"> -->
        <script src="https://kit.fontawesome.com/2989139b78.js" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="header" class="container-fluid">
                <!-- <a class="navbar-brand" href="#"></a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="halaman" href="Logout.php?halaman=Log out">Log out</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="About.php?halaman=About">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="Contact.php?halaman=Contact">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- <div id="header" class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <ul>
                        <li><a href="Logout.php?halaman=Log out">Log out</a></li>
                        <li><a href="About.php?halaman=About">About</a></li>
                        <li><a href="Contact.php?halaman=Contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-7 text-left">
                    <input type="search" id=search name="search" placeholder="Search..">
                    <button id="search-button"><i class="fa fa-search"></i></button>
                </div>
                <div class="col-1">
                    <a href="#" id="user-button"><i class="fa fa-user"></i></a>
                </div>
            </div>
        </div> -->

        <div id="main" class="container">
            <div class="row p-3 jumlahData">

                <div class="col-10 total">
                    <span>Total Kegiatan/Acara : </span>
                </div>

                <div class="col-2 jumlahnya">
                    <span>003</span>
                </div>
    <!-- 
                <div class="col-4 terdaftar">
                    <span>Terdaftar : </span>
                    <span>387</span>
                </div>

                <div class="col-4 ditindaklanjuti">
                    <span>Ditindaklanjuti : </span>
                    <span>000</span>
                </div> -->

            </div>
            <div class="row p-3 pengajuan">
                <div class="col-2">
                    <img class="gambar" src="img/no-profil.svg" alt="no-profile">
                </div>
                <div class="col-8">
                    <span>Lomba Cerdas Cermat Anak-Anak</span><br>
                    <span>01-15 Maret 2021 | Meunasah Gampong | Rina</span><br>
                    <span><a href="#">Lihat selengkapnya...</a></span>
                </div>
                <div class="col-2">
                    <button><i class="fa fa-check-circle" style="margin: 0 1.5px;"></i></button>
                    <button><i class="fa fa-times" style="margin: 0 5.6px;"></i></button>
                </div>
            </div>
            <div class="row p-3 pengajuan">
                <div class="col-2">
                    <img class="gambar" src="img/no-profil.svg" alt="no-profile">
                </div>
                <div class="col-8">
                    <span>Pendidikan Teknologi Untuk Orang Tua</span><br>
                    <span>07-21 Maret 2021 | Balai Desa | Misbah</span><br>
                    <span><a href="#">Lihat selengkapnya...</a></span>
                </div>
                <div class="col-2">
                    <button><i class="fa fa-check-circle" style="margin: 0 1.5px;"></i></button>
                    <button><i class="fa fa-times" style="margin: 0 5.6px;"></i></button>
                </div>
            </div>
            <div class="row p-3 pengajuan">
                <div class="col-2">
                    <img class="gambar" src="img/no-profil.svg" alt="no-profile">
                </div>
                <div class="col-8">
                    <span>Turnamen Voli Tingkat Gampong</span><br>
                    <span>12-23 Februari 2021 | Lapangan Gampong | Ari</span><br>
                    <span><a href="#">Lihat selengkapnya...</a></span>
                </div>
                <div class="col-2">
                    <button><i class="fa fa-check-circle" style="margin: 0 1.5px;"></i></button>
                    <button><i class="fa fa-times" style="margin: 0 5.6px;"></i></button>
                </div>
            </div>
        </div>
        <div id="footer" class="container-fluid pt-3">
            <div class="row">
                <div class="col-4 text-left pt-2" id="copyright">
                    &copy; Darussalam
                </div>
                <div class="col-4 text-center">
                    <span>Darussalam Keuchik</span>
                </div>
                <div class="col-4"></div>
            </div>
            <hr>
            <div class="row social-button">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4 text-right">
                    <ul>
                        <li><img src="img/facebook.svg"></li>
                        <li><img src="img/google.svg"></li>
                        <li><img src="img/twitter.svg"></li>
                        <li><img src="img/linkedin.svg"></li>
                        <li><img src="img/instagram.svg"></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php 
            if(isset($_GET['halaman'])){
                $page = $_GET['halaman'];
                    switch ($page) {
                        case 'Log out':
                            include "Logout.php";
                            break;
                        case 'About':
                            include "About.php";
                            break;
                        case 'Contact':
                            include "Contact.php";
                            break;			
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                        }   
            }
        ?>

    </body>

</html>