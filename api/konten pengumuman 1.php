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
         <div class="loader"><img src="../images/loading.gif" alt="#"></div>
      </div> -->
      <?php $_SESSION['no_page'] = 4; include 'navbar.php'; ?>
      <!-- end loader -->
      <!-- header -->
      <div class="banner_main">
        <!-- news section -->
        <div class="news w3-animate-bottom" style="padding: 30px 20px;">
           <div class="container" style="padding-left: 0; padding-right: 0;">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage" id="judulartikel">
                        <h2>Pengumuman Pasca Diklat - OPREC KSR 2022</h2>
                        <p>11-18-2022</p>
                     </div>
                  </div>
               </div>
           </div>
            <div id="kontenp">
               <div>
                  <p style="font-weight: bold;">Halo Calon Anggota Muda KSR Angkatan 13!</p>
                  <!-- <br> -->
                  <p>Selamat sudah melewati Diklat 2 dan Tes Tulis 
                     hari ini. Karena sebelumnya udah ada pengumuman pra diklat,
                     berarti ada juga dong pemunguman pasca diklat. 
                     Nah, mengenai apa aja yang perlu disiapkan setelah diklat, 
                     berikut dilampirkan file pengumuman pasca diklatnya ya.
                  </p><br>
                  <p>Tetap jaga kesehatan dan semangatnya!!!</p>
                  <br>
                  <p style="font-weight: bold;">Siamo Tutti Fratelli</p>
               </div>
                <a href="https://ksrpmistis.weebly.com/uploads/1/1/4/0/114042075/pengumuman_pasca_diklat.pdf" target=”_blank”>
                  <div class="pdf">
                     <img src="../images/pdf.png" alt="unduh" style="margin-left: 0; padding-left: 0">
                     <span><br></span>
                     <span>pengumuman_pasca_diklat.pdf</span> <br>
                     <span style="color: #c8ae79">Unduh Dokumen</span>
                  </div>
                </a>
                <br>
               <iframe id="pdf" src=
                  "https://www.docdroid.net/ZN06g0Z/pengumuman-pasca-diklat-pdf"
                  width="800"
                  height="500"></iframe>
            </div>
            <div class="opening" id="daftarartikel" style="padding-left: 0; padding-right: 0; margin-bottom: 0;">
                <h2>Daftar Pengumuman</h2>
                <a href="konten pengumuman 1.php"><p>Pengumuman Pasca Diklat - OPREC KSR 2022</p></a>
                <a href="konten pengumuman 2.php"><p>Pengumuman Pra Diklat - OPREC KSR 2022</p></a>
                <a href="konten pengumuman 3.php"><p>Pengumuman Pasca Diklat - OPREC KSR 2021</p></a>
                <a href="konten pengumuman 4.php"><p>Pengumuman Pra Diklat - OPREC KSR 2021</p></a>
                <a href="konten pengumuman 5.php"><p>Materi Tes Tertulis - OPREC KSR</p></a>
                <a href="konten pengumuman 6.php"><p>Pengumuman Pradiklat 3 - KSR Angkatan 11</p></a>
                <a href="konten pengumuman 7.php"><p>Pengumuman Pradiklat 2 - KSR Angkatan 11</p></a>
                <a href="konten pengumuman 8.php"><p>Pengumuman Pradiklat 1 - KSR Angkatan 11</p></a>
                <a href="konten pengumuman 9.php"><p>Pengumuman Pasca Diklat Calon Anggota KSR Angkatan 11</p></a>
                <a href="pengumuman.php"><p>Pengumuman lainnya...</p></a>
            </div>
            
         </div>
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
                     <a href="mailto:ksrpmi@stis.ac.id"><img src="../images/email.png" alt="email" width="35"></a>
                     <a href="https://twitter.com/ksr_stis" target=”_blank”><img src="../images/twitter.png" alt="twitter" width="50"></a>
      <a href="mailto:ksrpmi@stis.ac.id"><i class="fa fa-solid fa-envelope"></i></a>
               <a href="https://twitter.com/ksr_stis" target=”_blank”><i class="fa fa-twitter"></i></a>
               <a href="https://www.instagram.com/ksr_stis/" target=”_blank”><i class="fa fa-instagram"></i></a>               </div>
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

