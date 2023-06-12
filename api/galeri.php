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
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_bottom d_flex">
               <a class="logo" href="#"><img src="../images/logo.png" alt="#"></a>
               <div class="container" style="margin-left: 10px;">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">Beranda</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="artikel1.php">Artikel</a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="galeri.php">Galeri</a>
                                    <div class="underline"></div>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="pengumuman.php">Pengumuman</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="tentang.php">Tentang</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="search.php" method="post">
                              <input class="form_sea" type="text" placeholder="Cari artikel atau pengumuman" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="banner_main">
         <div class="news w3-animate-bottom" style="padding: 30px 20px;">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage" id="nonhome">
                        <h2>Galeri</h2>
                     </div>
                  </div>
               </div>
               <div class="fullgallery">
                  <figure class="gallery__item gallery__item-1">
                     <img src="../images/banner.jpg" class="gallery__img" alt="Image 1" onclick="openModal();currentSlide(0)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-2">
                     <img src="../images/donor.jpg" alt="Gallery image 2" class="gallery__img" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-3">
                     <img src="../images/pmi.jpg" alt="Gallery image 3" class="gallery__img" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-4">
                     <img src="../images/latian.jpg" alt="Gallery image 4" class="gallery__img" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-5">
                     <img src="../images/pmi jabar.jpeg" alt="Gallery image 5" class="gallery__img" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-6">
                     <img src="../images/banner.jpg" class="gallery__img" alt="Image 6" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-7">
                     <img src="../images/donor.jpg" alt="Gallery image 7" class="gallery__img" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-8">
                     <img src="../images/pmi.jpg" alt="Gallery image 8" class="gallery__img" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-9">
                     <img src="../images/latian.jpg" alt="Gallery image 9" class="gallery__img" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-10">
                     <img src="../images/pmi jabar.jpeg" alt="Gallery image 10" class="gallery__img" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-11">
                     <img src="../images/banner.jpg" class="gallery__img" alt="Image 11" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                  </figure>
                  <figure class="gallery__item gallery__item-12">
                     <img src="../images/donor.jpg" alt="Gallery image 12" class="gallery__img" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
                  </figure>
               </div>
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
      <div id="myModal" class="modal">
         <span class="close cursor" onclick="closeModal()">&times;</span>
         <div class="modal-content" style="height:50%; width: 50%;">
           <div class="mySlides">
             <div class="numbertext">1 / 4</div>
             <img src="" style="width:100%;">
           </div>
         </div>
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
       </div>
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

