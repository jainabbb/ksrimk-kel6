<?php include 'head.php' ?>

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
                           <a href="konten artikel 10.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel11">
                        <div class="gift_box">
                           <i><img src="../images/artikel 11.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Tidur dalam Gelap? Ini Manfaatnya!!</h1></div>
                           <div class="resume"><p>Selain dapat menghemat listrik, ternyata keadaan gelap saat tidur bermanfaat bagi kesehatan tubuh.</p></div>
                           <a href="konten artikel 11.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel12">
                        <div class="gift_box">
                           <i><img src="../images/artikel 12.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Diare? Jangan Anggap Sepele!</h1></div>
                           <div class="resume"><p>Berdasarkan penyakit menular, diare merupakan penyebab kematian peringkat ke-3 setelah TB dan Pneumonia.</p></div>
                           <a href="konten artikel 12.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel13">
                        <div class="gift_box">
                           <i><img src="../images/artikel 13.png" alt="pmi"></i>
                           <div class="lartikelh1"><h1>Anak Kost Anti Sakit</h1></div>
                           <div class="resume"><p>Ada beberapa yang perlu kamu perhatikan saat berada di tanah rantau yang jauh dari keluarga.</p></div>
                           <a href="konten artikel 13.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel14">
                        <div class="gift_box">
                           <i><img src="../images/artikel 14.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h1>Tips Menjaga Kesehatan Mata di Depan Layar</h1>
                           </div>
                           <div class="resume">
                              <p>Berikut ini 10 tips untuk tetap menjaga kesehatan mata saat sedang bekerja di depan layar.</p>
                           </div>
                           <a href="konten artikel 14.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel15">
                        <div class="gift_box">
                           <i><img src="../images/artikel 15.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h1>Insomnia</h1>
                           </div>
                           <div class="resume">
                              <p>Terbiasa tidur larut malam selama beberapa pekan bisa menganggu siklus tidur kita.</p>
                           </div>
                           <a href="konten artikel 15.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4" id="artikel16">
                        <div class="gift_box">
                           <i><img src="../images/artikel 16.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h1>Mudik Sehat dan Nyaman</h1>
                           </div>
                           <div class="resume">
                              <p>Kesehatan tubuh selama mudik harus dijaga agar perjalanan lancar dan sampai kampung halaman dengan selamat.</p>
                           </div>
                           <a href="konten artikel 16.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel17">
                        <div class="gift_box">
                           <i><img src="../images/artikel 17.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h1>Tidur di Lantai dengan Paparan Kipas Angin</h1>
                           </div>
                           <div class="resume">
                              <p>Tidur di lantai dengan ditemani kipas angin itu berpengaruh buruk bagi kesehatan.</p>
                           </div>
                           <a href="konten artikel 17.php" class="sumbit visitedart">Lihat Selengkapnya</a>
                        </div>
                     </div>
                     <div class="col-md-4" id="artikel18">
                        <div class="gift_box">
                           <i><img src="../images/artikel 18.png" alt="pmi"></i>
                           <div class="lartikelh1">
                              <h1>Migrain? Jangan Biarkan!!!</h1>
                           </div>
                           <div class="resume">
                              <p>Sakit kepala sebelah berdenyut yang disertai dengan mual dan muntah dalam waktu lama adalah gejala migrain.</p>
                           </div>
                           <a href="konten artikel 18.php" class="sumbit visitedart">Lihat Selengkapnya</a>
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

   <?php include 'footer.php' ?>
</body>

</html>