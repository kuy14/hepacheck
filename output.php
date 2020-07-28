<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div class="container-fluid slider">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light mt-4">
                    <a class="navbar-brand" href="beranda.php"><img src="../assets/logo.png" width="180" height="42" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active mr-2">
                                <a class="nav-link" href="../beranda.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="../cek-hepatitis.php">Cek hepatitis</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="../info-hepatitis.php">Info hepatitis<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="../about.php">Tentang Kami<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row ">
                    <div class="col-md-5 konten-kiri">
                        <h1>CEK KESEHATAN <br>HATI ANDA</h1>
                        <h6 class="mt-4">Dengan langkah-langkah Mudah berikut ini</h6>
                        <hr class="pembatas">
                        <p>1. Imunisasi sejak dini <br>
                            2. Minum air yang banyak <br>
                            3. Makan makanan bergizi <br>
                            4. Hindari alkohol <br>
                            5. Hati-hati dalam mengonsumsi obat <br>
                        </p>

                        </p>
                        <a href="#" class="btn-biru">CEK SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid content-cek">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="row content-card">
                    <div class="col-md-4 content-cek3">
                        <h5>LANGKAH <br> PEMERIKSAAN</h5> <br>
                        <ul>
                            <li>
                                Data Diri
                            </li>
                            <li>
                                Pemeriksaan Area Pencernaan
                            </li>
                            <li>
                                Pemeriksaan Area Kesehatan Fisik
                            </li>
                            <li>
                                Pemeriksaan Area Kesehatan Psikis
                            </li>
                            <li>
                                Kontak Langsung Dengan Penyakit atau Kebiasaan
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 content-cek3-kanan">
                        <div class="col-md-12 content-cek2 pl-5 pr-5 pt-3">
                        <h6>Hasil Anda</h6><br>
                            <div class="row">
                                <div class="col-md-6"><p>Nama : <?php echo $var_nama ?></p></div>
                                <div class="col-md-6"><p>Usia : <?php echo $var_umur ?></p></div>
                                <div class="col-md-6"><p>Jenis Kelamin : <?php echo $var_jk ?></p></div>
                                <div class="col-md-6"><p>Pekerjaan : <?php echo $var_pekerjaan ?></p></div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Jenis Hepatitis</th>
                                        <th scope="col">Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Hepatitis A</th>
                                        <td><?php echo $finn_s1 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis B</th>
                                        <td><?php echo $finn_s2 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis C</th>
                                        <td><?php echo $finn_s3 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis D</th>
                                        <td><?php echo $finn_s4 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis E</th>
                                        <td><?php echo $finn_s5 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis Alcoholic</th>
                                        <td><?php echo $finn_s6 ?> %</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hepatitis Autoimun</th>
                                        <td><?php echo $finn_s7 ?> %</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-size: 0.8em;">Berdasarkan data diatas, anda kemungkinan terkena penyakit <strong><?php echo $status ?></strong> dengan persentase terbanyak sebesar <strong><?php echo $largeval ?> %</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 footer offset-1 ">
                <div class="row">
                    <div class="col-md-4 footer1">
                        <div class="row">
                            <div class="col-12">
                                <img src="../assets/logo.png" width="256" height="64" alt="">
                            </div>
                            <div class="col-12">
                                <h5>Design and Developed by</h5>
                            </div>
                            <div class="col-6">
                                <h6>Kurniawan Yusuf</h6>
                                <a href=""><i class="fab fa-facebook"></i></a> <a href=""><i class="fab fa-instagram"></i></a> <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="col-6">
                                <h6>Heru Kurniawan</h6>
                                <a href=""><i class="fab fa-facebook"></i></a> <a href=""><i class="fab fa-instagram"></i></a> <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 footer2">
                        <div class="row">
                            <div class="col-12 ">
                                <h6>Features</h6>
                                <a href="">
                                    <h6>Cek penyakit Hepatitis</h6>
                                </a>
                                <a href="">
                                    <h6>Info penyakit hepatitis </h6>
                                </a>
                                <a href="">
                                    <h6>Data Hepatitis</h6>
                                </a>
                                <a href="">
                                    <h6>Tentang Kami</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 footer3">
                        <div class="row">
                            <div class="col-12">
                                <h6>Helpful Links</h6>
                                <a href="">
                                    <h6>Dokter Spesialis</h6>
                                </a>
                                <a href="">
                                    <h6>Pertolongan Pertama</h6>
                                </a>
                                <a href="">
                                    <h6>Kontak Rumah Sakit</h6>
                                </a>
                                <a href="">
                                    <h6>Home Care</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>