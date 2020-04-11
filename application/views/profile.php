<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding-Test Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/style.css">
</head>
<body>
    <!-- Navbar web -->
    <nav class="navbar">
        <span id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="<?= base_url(); ?>" id="logo">RIDO TEST</a>
        <ul id="main-nav">
            <li>
                <a href="<?= base_url(); ?>" class="nav-link">Home</a>
            </li>
            <li>
                <a href="<?= base_url('profile'); ?>" class="nav-link active">Profile</a>
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

    <!-- Bagian profile -->
    <div class="profile-section">
        <h3 class="p-title">
            Profile Tim Kami
        </h3>
        <p class="p-desk">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </p>
    </div>

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
    <!-- Akhir bagian profile -->

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
                                    <div class="table">
                                        <table class="p-list">
                                            <tr>
                                                <td>Name</td>
                                                <td>: `+ response.results[0].name.title + ` ` + response.results[0].name.first + ` ` + response.results[0].name.last +`</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>: `+ response.results[0].gender + `</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>: `+ response.results[0].location.street.name + `, No.`+ response.results[0].location.street.number +`</td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td>: `+ response.results[0].location.city + `</td>
                                            </tr>
                                            <tr>
                                                <td>State</td>
                                                <td>: `+ response.results[0].location.state + `</td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td>: `+ response.results[0].location.country + `</td>
                                            </tr>
                                            <tr>
                                                <td>Post Code</td>
                                                <td>: `+ response.results[0].location.postcode + `</td>
                                            </tr>
                                            <tr>
                                                <td>Coordinates</td>
                                                <td>: `+ response.results[0].location.coordinates.latitude + `, `+ response.results[0].location.coordinates.longitude +`</td>
                                            </tr>
                                            <tr>
                                                <td>Time Zone</td>
                                                <td>: `+ response.results[0].location.timezone.offset + `, `+ response.results[0].location.timezone.description +`</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: `+ response.results[0].email + `</td>
                                            </tr>
                                            <tr>
                                                <td>User ID</td>
                                                <td>: `+ response.results[0].login.uuid + `</td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>: `+ response.results[0].login.username + `</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>: `+ response.results[0].login.password+ `</td>
                                            </tr>
                                            <tr>
                                                <td>DOB</td>
                                                <td>: Date = `+ response.results[0].dob.date + `, age = `+ response.results[0].dob.age +`</td>
                                            </tr>
                                            <tr>
                                                <td>Registered</td>
                                                <td>: Date = `+ response.results[0].registered.date + `, age = `+ response.results[0].registered.age +`</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>: `+ response.results[0].phone + `</td>
                                            </tr>
                                            <tr>
                                                <td>Cell</td>
                                                <td>: `+ response.results[0].cell + `</td>
                                            </tr>
                                            <tr>
                                                <td>ID Name</td>
                                                <td>: `+ response.results[0].id.name + `</td>
                                            </tr>
                                            <tr>
                                                <td>ID Value</td>
                                                <td>: `+ response.results[0].id.value + `</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        `);
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