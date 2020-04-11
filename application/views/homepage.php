<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding-Test Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/style.css">
</head>
<body>
    <!-- Navbar web -->
    <nav class="navbar">
        <span id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" id="logo">RIDO TEST</a>
        <ul id="main-nav">
            <li>
                <a href="#" class="nav-link active">Home</a>
            </li>
            <li>
                <a href="#" class="nav-link">Profile</a>
            </li>
            <li>
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li>
                <a href="#" class="nav-link">Contact Us</a>
            </li>
        </ul>
    </nav>
    <!-- Akhir navbar -->

    <!-- Baner Web Profile -->
    <div class="baner">
        <div class="container">
            <h1 class="judul">Bangun Web anda dengan Rido Test</h1>
            <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="btn">
                <a class="btn-baner1" href="#">Read More</a>
                <a class="btn-baner2" href="<?= base_url('profile'); ?>">Lihat Profile</a>
            </div>
        </div>     
    </div>
    <!-- Akhir baner Web Profile -->

    <!-- Bagian Fitur -->
    <div class="fitur">
        <div class="fitur-list">
            <span class="fitur-deskripsi">Murah</span>
        </div>
        <div class="fitur-list">
            <span class="fitur-deskripsi">Cepat</span>
        </div>
        <div class="fitur-list">
            <span class="fitur-deskripsi">Garansi</span>
        </div>
    </div>
    <!-- Akhir Bagian Fitur -->

    <!-- Bagian List Blog -->
    <div class="blog">
        <div class="container-header">
            <h3 class="jb">Baca Blog Kami</h3>
            <p class="jb-desk">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod</p>
        </div>
        <div class="blog-container">
            <div class="konten-blog">
                <div class="blog-header">
                    <h4 class="judul-blog">Judul Blog 1</h4>
                    <span class="desk-blog">Ditulis oleh Rido pada 10/04/2020</span>
                </div>
                <div class="blog-body">
                    <p class="isi-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <a href="#" class="btn-blog">Read more</a>
            </div>
            <div class="konten-blog">
                <div class="blog-header">
                    <h4 class="judul-blog">Judul Blog 1</h4>
                    <span class="desk-blog">Ditulis oleh Rido pada 10/04/2020</span>
                </div>
                <div class="blog-body">
                    <p class="isi-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <a href="#" class="btn-blog">Read more</a>
            </div>
            <div class="konten-blog">
                <div class="blog-header">
                    <h4 class="judul-blog">Judul Blog 1</h4>
                    <span class="desk-blog">Ditulis oleh Rido pada 10/04/2020</span>
                </div>
                <div class="blog-body">
                    <p class="isi-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <a href="#" class="btn-blog">Read more</a>
            </div>
        </div>
    </div>
    <!-- Akhir Bagian List Blog -->

    <!-- Profile TIM -->
    <div class="profile">
        <div class="container-header">
            <h3 class="jb">Profile Tim Kami</h3>
            <button id="randomProfile" class="btn-random">Tekan Untuk Random</button>
        </div>
        <div class="profile-container">
            <div id="result" class="res">
                <!-- tempat hasil profil random ditampilkan -->
            </div>        
        </div>
    </div>
    <!-- Akhir Profile TIM -->

    <!-- Bagian Footer -->
    <div class="footer">
        <div class="container-header">
            <h3 class="jb">Kontak Kami</h3>
        </div>
        <div class="footer-container">
            <div class="footer-kontak">
                <h3>RidoDev-Test</h3>
                <p>Ada pertanyaan? Hubungi kami 24/7</p>
                <a class="wa" href="https://api.whatsapp.com/send?phone=6285292133150&text=Halo%20Admin.." target="_blank">+62 852 9213 3150</a>
                <p>JL. Mulawarman Barat Dalam I, No. 10 A, Tembalang, Kota Semarang</p>
            </div>
            <div class="layanan">
                <h3>Layanan Pelanggan</h3>
                <a href="#">Akun Saya</a>
                <a href="#">Daftar Harga</a>
                <a href="#">FAQs</a>
                <a href="#">Report</a>
            </div>
            <div class="medsos">
                <h3>Kunjungi Media Sosial Kami</h3>
                <a href="#">Facebook</a>
                <a href="#">Youtube</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; 2020 | made by ridosimbolon98@gmail.com</p>
    </div>
    <!-- Akhir bagian Footer -->


    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    <script>
        //Fungsi untuk menampilkan random profile dari API
        function randomProfile() {
            $.ajax({
                url: "https://randomuser.me/api/",
                type: 'get',
                dataType: 'json',
                success: function(response)
                {
                    if (response.info.results == 1) {
                        $('#result').append(`
                            <div class="list-tim">
                                <div class="profile-header">
                                    <img class="profile-foto" src="`+ response.results[0].picture.large +`"></img>
                                </div>
                                <div class="profile-body">
                                    <h3 class="profile-name">`+ response.results[0].name.title + ` ` + response.results[0].name.first + ` ` + response.results[0].name.last +`</h3>
                                    <p class="profile-gender">` + response.results[0].gender + `</p>
                                    <p class="profile-address">`+ response.results[0].location.street.name + `, Number : `+ response.results[0].location.street.number +`</p>
                                    <p class="profile-address">City : `+ response.results[0].location.city +`</p>
                                    <p class="profile-address">State : `+ response.results[0].location.state +`</p>
                                    <p class="profile-address">Country : `+ response.results[0].location.country +`</p>
                                    <p class="profile-address">Post Code : `+ response.results[0].location.postcode +`</p>
                                    <p class="profile-address">Coordinates : `+ response.results[0].location.coordinates.latitude + `, `+ response.results[0].location.coordinates.longitude +`</p>
                                    <p class="profile-address">Time Zone : `+ response.results[0].location.timezone.offset + `, `+ response.results[0].location.timezone.description +`</p>
                                    <p class="profile-email">`+ response.results[0].email +`</p>
                                    <p class="profile-email">User ID : `+ response.results[0].login.uuid + `</p>
                                    <p class="profile-email">Username : `+ response.results[0].login.username + `</p>
                                    <p class="profile-email">Password : `+ response.results[0].login.password+ `</p>
                                    <p class="profile-DOB">DOB : `+ response.results[0].dob.date + `, Age : `+ response.results[0].dob.age +`</p>
                                    <p class="profile-DOB">Registered date : `+ response.results[0].registered.date + `, age : `+ response.results[0].registered.age +`</p>
                                    <p class="profile-phone">Phone : `+ response.results[0].phone +`, Cell : `+ response.results[0].cell +`</p>
                                    <p class="profile-phone">ID Name : `+ response.results[0].id.name +`</p>
                                    <p class="profile-phone">ID Value : `+ response.results[0].id.value +`</p>
                                </div>
                            </div>
                        `)
                    } else {
                        $('#result').append(`
                            <div class="list-tim">
                                <p>Data Kosong!</p>
                            </div>
                        `);
                    }
                }
            });
        }

        $(document).ready(function () { 
            $('#result').html('');
            randomProfile();
        });

        $('#randomProfile').on('click', function () { 
            $('#result').html('');
            randomProfile();
        });
    </script>
</body>
</html>