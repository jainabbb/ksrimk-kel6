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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   $_SESSION['no_page'] = 2;
   include 'navbar.php'; ?>
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
            <div class="three_box">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4" id="artikel10">
                        <div class="gift_box">
                           <i><img src="../images/artikel 10.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tubuh Ideal Setelah Hari Raya? Why Not?!</h1></div>
                           <div class="resume"><p>Berikut hal yang harus diperhatikan agar kita tetap memiliki tubuh yang ideal usai hari raya.</p></div>
                           <a href="konten artikel 10.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel11">
                        <div class="gift_box">
                           <i><img src="../images/artikel 11.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tidur dalam Gelap? Ini Manfaatnya!!</h1></div>
                           <div class="resume"><p>Selain dapat menghemat listrik, ternyata keadaan gelap saat tidur bermanfaat bagi kesehatan tubuh.</p></div>
                           <a href="konten artikel 11.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel12">
                        <div class="gift_box">
                           <i><img src="../images/artikel 12.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Diare? Jangan Anggap Sepele!</h1></div>
                           <div class="resume"><p>Berdasarkan penyakit menular, diare merupakan penyebab kematian peringkat ke-3 setelah TB dan Pneumonia.</p></div>
                           <a href="konten artikel 12.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel13">
                        <div class="gift_box">
                           <i><img src="../images/artikel 13.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Anak Kost Anti Sakit</h1></div>
                           <div class="resume"><p>Ada beberapa yang perlu kamu perhatikan saat berada di tanah rantau yang jauh dari keluarga.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel14">
                        <div class="gift_box">
                           <i><img src="../images/artikel 14.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tips Menjaga Kesehatan Mata di Depan Layar</h1></div>
                           <div class="resume"><p>Berikut ini 10 tips untuk tetap menjaga kesehatan mata saat sedang bekerja di depan layar.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel15">
                        <div class="gift_box">
                           <i><img src="../images/artikel 15.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Insomnia</h1></div>
                           <div class="resume"><p>Terbiasa tidur larut malam selama beberapa pekan bisa menganggu siklus tidur kita.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel16">
                        <div class="gift_box">
                           <i><img src="../images/artikel 16.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Mudik Sehat dan Nyaman</h1></div>
                           <div class="resume"><p>Kesehatan tubuh selama mudik harus dijaga agar perjalanan lancar dan sampai kampung halaman dengan selamat.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel17">
                        <div class="gift_box">
                           <i><img src="../images/artikel 17.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tidur di Lantai dengan Paparan Kipas Angin</h1></div>
                           <div class="resume"><p>Tidur di lantai dengan ditemani kipas angin itu berpengaruh buruk bagi kesehatan.</p></div>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel18">
                        <div class="gift_box">
                           <i><img src="../images/artikel 18.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Migrain? Jangan Biarkan!!!</h1></div>
                           <div class="resume"><p>Sakit kepala sebelah berdenyut yang disertai dengan mual dan muntah dalam waktu lama adalah gejala migrain.</p></div>
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
                  <li class="page-item"><a class="page-link" href="artikel1.php">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
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
                     <input class="letter_form" placeholder=" Masukkan Email Anda" type="text" name="Masukkan Email Anda">
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
               <a href="mailto:ksrpmi@stis.ac.id"><i class="fa fa-solid fa-envelope"></i></a>
               <a href="https://twitter.com/ksr_stis" target=”_blank”><i class="fa fa-twitter"></i></a>
               <a href="https://www.instagram.com/ksr_stis/" target=”_blank”><i class="fa fa-instagram"></i></a>
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