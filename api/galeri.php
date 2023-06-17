<?php include 'head.php' ?>

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"></div>
      </div> -->
   <?php
   $_SESSION['no_page'] = 3;
   include 'navbar.php'; ?>
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

   <?php include 'footer.php' ?>
</body>

</html>
<div id="myModal" class="modal">
   <span class="close cursor" onclick="closeModal()">&times;</span>
   <div class="modal-content" style="height:50%; width: 50%;">
      <div class="mySlides">
         <div class="numbertext">1 / 4</div>
         <img src="" style="height:100%;">
      </div>
   </div>
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>