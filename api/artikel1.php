<?php include 'head.php' ?>

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"></div>
      </div> -->
   <?php
   $_SESSION['no_page'] = 2; ?>
   <?php include 'navbar.php'; ?>
   <div class="banner_main">
      <!-- news section -->
      <div class="news w3-animate-bottom" style="padding: 30px 20px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage" id="nonhome">
                     <h1>Daftar Artikel</h1>
                  </div>
               </div>
            </div>
            <div class="three_box" id="artikeldiv">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4" id="artikel1">
                        <div class="gift_box">
                           <i><img src="../images/artikel 1.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Pentingnya "Me Time" Untuk Kesehatan Psikologis</h3>
                           </div>
                           <div class="resume">
                              <p>Pernahkah kamu merasa penat akan segala rutinitas yang kamu lakukan?</p>
                           </div>
                           <a href="konten artikel 1.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel2">
                        <div class="gift_box">
                           <i><img src="../images/artikel 2.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Menjaga 'Mindset' Sehat di Tengah Pandemi</h3>
                           </div>
                           <div class="resume">
                              <p>Pikiran yang positif dan realistis setidaknya dapat membantu kita berpikir lebih jernih sebelum mengambil keputusan.</p>
                           </div>
                           <a href="konten artikel 2.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel3">
                        <div class="gift_box">
                           <i><img src="../images/artikel 3.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Pembelajaran Jarak Jauh Sehat, Bisakah?</h3>
                           </div>
                           <div class="resume">
                              <p>Duduk di depan perangkat digital seperti komputer atau laptop 'seharian' tentunya punya dampak negatif, lho!</p>
                           </div>
                           <a href="konten artikel 3.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel4">
                        <div class="gift_box">
                           <i><img src="../images/artikel 4.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Gangguan Kesehatan Mental</h3>
                           </div>
                           <div class="resume">
                              <p>Kondisi kesehatan bukan hanya kesehatan fisik namun juga kesehatan mental.</p>
                           </div>
                           <a href="konten artikel 4.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel5">
                        <div class="gift_box">
                           <i><img src="../images/artikel 5.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Yuk Kenal Lebih Dekat Dengan COVID-19</h3>
                           </div>
                           <div class="resume">
                              <p>COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.</p>
                           </div>
                           <a href="konten artikel 5.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel6">
                        <div class="gift_box">
                           <i><img src="../images/artikel 6.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Tetua Berkata, Budak Bertindak</h3>
                           </div>
                           <div class="resume">
                              <p>Kinta, sebuah kampung tua di Palu, Sulawesi Tenggara ternyata bertuah. Di kampung itu berdiri 15 rumah saling berhadapan.</p>
                           </div>
                           <a href="konten artikel 6.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel7">
                        <div class="gift_box">
                           <i><img src="../images/artikel 7.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Pola Hidup Mahasiswa Politeknik Statistika STIS 2019</h3>
                           </div>
                           <div class="resume">
                              <p>Ada tiga elemen yang dapat menentukan kualitas tidur yang baik, yaitu durasi, kontinuitas dan kedalaman.</p>
                           </div>
                           <a href="konten artikel 7.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel8">
                        <div class="gift_box">
                           <i><img src="../images/artikel 8.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Gempa Bumi? Jangan Panik!</h3>
                           </div>
                           <div class="resume">
                              <p>Gempa merupakan salah satu bencana alam yang telah merogoh harta bahkan nyawa manusia.</p>
                           </div>
                           <a href="konten artikel 8.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel9">
                        <div class="gift_box">
                           <i><img src="../images/artikel 9.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h3>Save Our Ocean, Plastic Free!</h3>
                           </div>
                           <div class="resume">
                              <p>Kebiasaan masyarakat yang sering membuang sampah ke sungai menyebabkan sampah menumpuk di lautan.</p>
                           </div>
                           <a href="konten artikel 9.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-end paginationart">
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

   <?php include 'footer.php' ?>
</body>

</html>