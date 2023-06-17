<?php include 'head.php' ?>

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
            <div class="logo-index">
               <img src="../images/logo.png" alt="Logo" width="310" height="310" id="logo">
            </div>
            <div class="title-home">
               <h2>KSR PMI Unit</h2>
               <h2>Politeknik Statistika</h2>
               <h2>STIS</h2>
            </div>
            <div class="paragraf-justify">
            <br>
            <p>Kegiatan-kegiatan kampus tidak lepas dari timbulnya kecelakaan bagi pesertanya.
               Sayangnya, sumber daya yang memiliki kemampuan dalam memberikan pertolongan
               pertama di STIS selama ini masih kurang. Hal ini dikarenakan tidak adanya suatu wadah untuk
               pelatihan atau pendidikan dasar kepalangmerahan kepada mahasiswa STIS.
               Berdasarkan hal tersebut, beberapa mahasiswa STIS dan anggota pecinta alam
               STIS “GPA CHEBBY” yang tergerak hatinya bermaksud untuk mendirikan suatu unit
               kegiatan mahasiswa yang bergerak di bidang sosial, kemanusiaan, dan pertolongan pertama.</p>
            </div>
         </div>
         <div class="container bagian">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Pengumuman</h2>
                  </div>
               </div>
            </div>
            <div class="opening" style="padding-left: 1.5%; padding-right: 1.5%; margin-bottom: 3%;" id="indexp">
               <a href="konten pengumuman 1.php">
                  <h2>Pengumuman Pasca Diklat - OPREC KSR 2022</h2>
                  <h1>18-11-2022</h1>
               </a>
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
               <a href="https://ksrpmistis.weebly.com/uploads/1/1/4/0/114042075/pengumuman_pasca_diklat.pdf" target=”_blank” class="pdf">
                  <img src="../images/pdf.png" alt="unduh">
                  <span><br></span>
                  <span>pengumuman_pasca_diklat.pdf</span> <br>
                  <span style="color: #c8ae79">Unduh Dokumen</span>
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
                  <div class="col-md-4" id="artikel1">
                        <div class="gift_box">
                           <i><img src="../images/artikel 1.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Pentingnya "Me Time" Untuk Kesehatan Psikologis</h1></div>
                           <div class="resume"><p>Pernahkah kamu merasa penat akan segala rutinitas yang kamu lakukan?</p></div>
                           <a href="konten artikel 1.php"><button class="sumbit">Lihat Selengkapnya</button></a>
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