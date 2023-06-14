<?php
session_start();
$_SESSION['no_page'] = 2; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>IMK Redesign Website KSR</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="image/gif">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"></div>
      </div> -->
   <?php
   session_start();
   $_SESSION['no_page'] = 2; ?>
   <?php include 'navbar.php'; ?>
   <div class="banner_main">
      <!-- news section -->
      <div class="news w3-animate-bottom" style="padding: 30px 20px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage" id="nonhome">
                     <h2>Daftar Artikel</h2>
                  </div>
               </div>
            </div>
            <div class="three_box" id="artikeldiv">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4" id="artikel1">
                        <div class="gift_box">
                           <i><img src="../images/artikel 1.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Pentingnya "Me Time" Untuk Kesehatan Psikologis</h1></div>
                           <div class="resume"><p>Pernahkah kamu merasa penat akan segala rutinitas yang kamu lakukan?</p></div>
                           <a href="konten artikel.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel2">
                        <div class="gift_box">
                           <i><img src="../images/artikel 2.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Menjaga 'Mindset' Sehat di Tengah Pandemi</h1></div>
                           <div class="resume"><p>Pikiran yang positif dan realistis setidaknya dapat membantu kita berpikir lebih jernih sebelum mengambil keputusan.</p></div>
                           <a href="konten artikel 2.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel3">
                        <div class="gift_box">
                           <i><img src="../images/artikel 3.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Pembelajaran Jarak Jauh Sehat, Bisakah?</h1></div>
                           <div class="resume"><p>Duduk di depan perangkat digital seperti komputer atau laptop 'seharian' tentunya punya dampak negatif, lho!</p></div>
                           <a href="konten artikel 3.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 4.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Gangguan Kesehatan Mental</h1></div>
                           <div class="resume"><p>Kondisi kesehatan bukan hanya kesehatan fisik namun juga kesehatan mental.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 5.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Yuk Kenal Lebih Dekat Dengan COVID-19</h1></div>
                           <div class="resume"><p>COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 6.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tetua Berkata, Budak Bertindak</h1></div>
                           <div class="resume"><p>Kinta, sebuah kampung tua di Palu, Sulawesi Tenggara ternyata bertuah. Di kampung itu berdiri 15 rumah saling berhadapan.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 7.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Pola Hidup Mahasiswa Politeknik Statistika STIS 2019</h1></div>
                           <div class="resume"><p>Ada tiga elemen yang dapat menentukan kualitas tidur yang baik, yaitu durasi, kontinuitas dan kedalaman.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 8.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Gempa Bumi? Jangan Panik!</h1></div>
                           <div class="resume"><p>Gempa merupakan salah satu bencana alam yang telah merogoh harta bahkan nyawa manusia.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 9.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Save Our Ocean, Plastic Free!</h1></div>
                           <div class="resume"><p>Kebiasaan masyarakat yang sering membuang sampah ke sungai menyebabkan sampah menumpuk di lautan.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-end">
                  <!-- <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                     </li> -->
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="artikel2.php">2</a></li>
                  <!-- <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                     </li> -->
               </ul>
            </nav>
         </div>
      </div>
      <!-- end news section -->
      <!-- three_box section -->
      <div class="container">
         <div class="row">
         </div>
      </div>
   </div>
   <!-- end three_box section -->

   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="inror_box">
                     <h3>Stay Updated!</h3>
                  </div>
               </div>
            </div>
            <div class="row footinfo">
               <div class="col-md-6">
                  <p>Email</p>
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <br>
                     <button class="submit">Subscribe</button>
                  </form>
               </div>
               <div class="col-md-6">
                  <img src="../images/location.png" alt="location" width="100" id="location">
                  <span>Sekretariat KSR PMI Unit STIS Ruang PMKL, Gedung 3 Lantai 3</span><br>
                  <span>Politeknik Statistika STIS</span><br>
                  <span>Jalan Otto Iskandardinata 64C,</span><br>
                  <span>Bidara Cina, Jatinegara, Jakarta Timur, DKI Jakarta, 13330</span>
               </div>
            </div>
            <div class="socials">
               <a href="mailto:ksrpmi@stis.ac.id"><img src="../images/email.png" alt="email" width="35"></a>
               <a href="https://twitter.com/ksr_stis" target=”_blank”><img src="../images/twitter.png" alt="twitter" width="50"></a>
               <a href="https://www.instagram.com/ksr_stis/" target=”_blank”><img src="../images/instagram.png" alt="twitter" width="30"></a>
            </div>
            <div class="socials">
               <p>© Copyright 2023, Politeknik Statistika STIS</p>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../js/custom.js"></script>
</body>

</html>