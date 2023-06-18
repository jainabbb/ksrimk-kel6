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
      <div class="news w3-animate-bottom" style="padding: 30px 20px;">
         <div class="container" style="padding-left: 0; padding-right: 0;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 id="judulsearch">Hasil Pencarian</h2>
                  </div>
               </div>
            </div>
         </div>
         <div style="padding-left: 0; padding-right: 0; margin-bottom: 0;">
            <div id="myBtnContainer">
               <button value="all" class="sumbit filterb float-none py-1 px-3 m-0 activeb">Semua</button>
               <button value="filterar" class="sumbit filterb float-none py-1 px-3 m-0">Artikel</button>
               <button value="filterp" class="sumbit filterb float-none py-1 px-3 m-0">Pengumuman</button>
            </div>
            <div id="filterar" class="mt-3">
               <div class="" style="padding-bottom: 0" id="daftarar">
                  <h2 id="adar" style="font-size: 24px;"></h2>
               </div>
               <?php
               require('simple_html_dom.php');
               $searchString = $_POST['search'];

               // cari artikel
               $i = 0;
               $j = 9;
               $k = 0;
               $articles = file('websites.txt', FILE_USE_INCLUDE_PATH);
               $articles2 = file('websites2.txt', FILE_USE_INCLUDE_PATH);
               echo '<div class="three_box" id="three_box">
                              <div class="container">
                                 <div class="row" id="artikeldiv">';
               $artlist = file_get_html('artikel1.php', true);
               $artlist2 = file_get_html('artikel2.php', true);
               foreach ($articles as $article) {
                  $i++;
                  $content = file_get_html(rtrim($article), true);
                  $judul = $content->find('#judulart');
                  $isi = $content->find('#konten');
                  if (stripos($judul[0]->plaintext, $searchString) !== false) {
                     $isiart = $artlist->find('#artikel' . $i);
                     echo $isiart[0]->outertext;
                     $k++;
                  } else {
                     if (stripos($isi[0]->plaintext, $searchString) !== false) {
                        $isiart = $artlist->find('#artikel' . $i);
                        echo $isiart[0]->outertext;
                        $k++;
                     }
                  }
               }
               foreach ($articles2 as $article) {
                  $j++;
                  $content = file_get_html(rtrim($article), true);
                  $judul = $content->find('#judulart');
                  $isi = $content->find('#konten');
                  if (stripos($judul[0]->plaintext, $searchString) !== false) {
                     $isiart = $artlist2->find('#artikel' . $j);
                     echo $isiart[0]->outertext;
                     $k++;
                  } else {
                     if (stripos($isi[0]->plaintext, $searchString) !== false) {
                        $isiart = $artlist2->find('#artikel' . $j);
                        echo $isiart[0]->outertext;
                        $k++;
                     }
                  }
               }
               echo '          </div>
                                 </div>
                           </div>';
               if ($k == 0) {
                  echo '<div class="opening" style="text-align: center; margin: 80px 0" id="noresult"></div>';
               } else {
                  echo '<div class="borders"></div>';
               }
               ?>
            </div>
            <div id="filterp">
               <?php
               // cari pengumuman
               echo '<div class="" style="padding-bottom: 0; margin-bottom: 10px" id="daftarp">
                              <h2 id="adap" style="font-size: 24px;"></h2>
                           </div>';
               $html = file_get_html('pengumuman.php', true);
               $html2 = file_get_html('pengumuman2.php', true);
               $pengumuman = $html->find('.daftarp div');
               $pengumumanp = $html->find('.daftarp');
               $pengumuman2 = $html2->find('.daftarp div');
               $pengumumanp2 = $html2->find('.daftarp');
               $a = 0;
               $b = 0;
               foreach ($pengumuman as $item) {
                  if (stripos($item->plaintext, $searchString) !== false) {
                     echo $pengumumanp[$a]->outertext;
                     $b++;
                  }
                  $a++;
               }
               $a = 0;
               foreach ($pengumuman2 as $item) {
                  if ($a == 5) break;
                  if (stripos($item->plaintext, $searchString) !== false) {
                     echo $pengumumanp2[$a]->outertext;
                     $b++;
                  }
                  $a++;
               }
               if ($b == 0) {
                  echo '<div class="opening" style="text-align: center; margin: 80px 0" id="noresultp"></div>';
               }

               // // judul page
               if ($k == 0) {
                  if ($b == 0) {
                     // echo "<script>document.getElementById('judulsearch').innerText += ' \"tidak ada hasil\"'</script>";
                     echo '<div class="opening" style="text-align: center; margin: 80px 0" id="noresultall">
                                    <img src="../images/no result.png" alt="no result" width="100">
                                    <br><br>
                                    <p style="font-size: 18px; font-weight: normal;">Tidak ada hasil</p>
                                 </div>';
                  }
               }
               //    } else {
               //       echo "<script>";
               //       echo "document.getElementById('judulsearch').innerText += ' \"ada pengumuman\"';
               //             document.getElementById('daftarp').classList.add('daftarp');
               //             document.getElementById('adap').innerText += 'Pengumuman ditemukan';
               //             document.getElementById('daftarar').style.display = 'none';
               //             document.getElementById('three_box').style.display = 'none';";
               //       echo "</script>";
               //    }
               // } else {
               //    if ($b == 0) {
               //       echo "<script>";
               //       echo "document.getElementById('judulsearch').innerText += ' \"ada artikel\"';
               //             document.getElementById('daftarar').classList.add('daftarp');
               //             document.getElementById('adar').innerText += 'Artikel ditemukan';
               //             document.getElementById('daftarp').style.display = 'none';";
               //       echo "</script>";
               //    } else {
               //       echo "<script>";
               //       echo "document.getElementById('judulsearch').innerText += ' \"ada artikel dan pengumuman\"';
               //             document.getElementById('daftarar').classList.add('daftarp');
               //             document.getElementById('adar').innerText += 'Artikel ditemukan';
               //             document.getElementById('daftarp').classList.add('daftarp');
               //             document.getElementById('adap').innerText += 'Pengumuman ditemukan'";
               //       echo "</script>";
               //    }
               // }
               ?>
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

   <?php include 'footer.php' ?>
   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script>
      $('#noresult').hide();
   </script>
   <script>
      if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
      }
   </script>
   <script src="../js/custom.js"></script>
</body>

</html>