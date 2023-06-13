<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
?>
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
   <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
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
   <?php
   $_SESSION['no_page'] = 1;
   include 'navbar.php'; ?>
   <div class="banner_main">
      <!-- news section -->
      <div class="news w3-animate-bottom">
         <div class="opening">
            <img src="../images/logo.png" alt="Logo" width="310" height="310" id="logo">
            <h2>KSR PMI Unit</h2>
            <h2>Politeknik Statistika</h2>
            <h2>STIS</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
         </div>
         <div class="container bagian">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Pengumuman</h2>
                  </div>
               </div>
            </div>
            <div class="opening" style="padding-left: 1.5%; padding-right: 1.5%; margin-bottom: 3%;" id="about">
               <a href="konten pengumuman 1.php">
                  <h2>Pengumuman 1</h2>
                  <h1>01-01-2023</h1>
               </a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur, ullam unde earum, est sapiente odit iste dolore ratione quis consequatur. Repellat unde dolor vero ab. Eos earum qui deserunt!
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis blanditiis architecto doloremque in obcaecati accusantium laboriosam, dicta illum saepe corporis ducimus aperiam quam enim, laudantium nostrum autem sapiente vitae quasi?
               </p>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum amet natus adipisci aliquam eos hic nemo velit consequatur eveniet cupiditate, eum ullam ratione, sed ad, quos officia. Corporis, eligendi?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto esse aut error dignissimos aliquam cupiditate sint, voluptatibus quo facere. Reprehenderit inventore in ullam veniam et tempore suscipit totam architecto.
               </p>
               <a href="https://ksrpmistis.weebly.com/uploads/1/1/4/0/114042075/pengumuman_pasca_diklat.pdf" target=”_blank” class="pdf">
                  <img src="../images/pdf.png" alt="unduh">
                  <span><br></span>
                  <span>Judul Dokumen</span> <br>
                  <span style="color: #c8ae79">Buka Dokumen</span>
               </a>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="artbutton">
                     <a href="pengumuman.php"><button class="sumbit">Pengumuman Lainnya</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="container bagian">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Artikel</h2>
                  </div>
               </div>
            </div>
            <div class="three_box">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/pmi.jpg" alt="pmi"></i>
                           <h1>Artikel 1</h1>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <a href="konten artikel.php"><button class="sumbit">Lihat Selengkapnya</button></a>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/pmi.jpg" alt="pmi"></i>
                           <h1>Artikel 2</h1>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gift_box">
                           <i><img src="../images/pmi.jpg" alt="pmi"></i>
                           <h1>Artikel 3</h1>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <button class="sumbit">Lihat Selengkapnya</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="artbutton">
                     <a href="artikel1.php"><button class="sumbit">Artikel Lainnya</button></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="container bagian">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Galeri</h2>
                  </div>
                  <div class="gallery">
                     <figure class="gallery__item gallery__item--1">
                        <img src="../images/banner.jpg" class="gallery__img" alt="Image 1" onclick="openModal();currentSlide(0)" class="hover-shadow cursor">
                     </figure>
                     <figure class="gallery__item gallery__item--2">
                        <img src="../images/donor.jpg" alt="Gallery image 2" class="gallery__img" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                     </figure>
                     <figure class="gallery__item gallery__item--3">
                        <img src="../images/pmi.jpg" alt="Gallery image 3" class="gallery__img" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                     </figure>
                     <figure class="gallery__item gallery__item--4">
                        <img src="../images/latian.jpg" alt="Gallery image 4" class="gallery__img" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                     </figure>
                     <figure class="gallery__item gallery__item--5">
                        <img src="../images/pmi jabar.jpeg" alt="Gallery image 5" class="gallery__img" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                     </figure>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="artbutton">
                     <a href="galeri.php"><button class="sumbit">Foto Lainnya</button></a>
                  </div>
               </div>
            </div>
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

   <?php include 'footer.php'; ?>
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
</body>

</html>