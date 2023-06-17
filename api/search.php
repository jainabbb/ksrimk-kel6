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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                           <div class="collapse navbar-collapse" id="navbarsExample04" style="height: 100%">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">Beranda</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="pengumuman.php">Pengumuman</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="artikel1.php">Artikel</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="galeri.php">Galeri</a>
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
               <!-- <div class="filter">
                  <select id="dropDown" class="form-select" autocomplete="off">
                     <option value="all" selected>Semua</option>
                     <option value="filterar">Artikel</option>
                     <option value="filterp">Pengumuman</option>
                  </select>
               </div>
               <br> -->
               <div id="myBtnContainer">
                  <button value="all" class="sumbit filterb float-none py-1 px-3 m-0 activeb">Semua</button>
                  <button value="filterar" class="sumbit filterb float-none py-1 px-3 m-0">Article</button>
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
                     $i = 0; $j = 9; $k = 0;
                     $articles = file('websites.txt', FILE_USE_INCLUDE_PATH);
                     $articles2 = file('websites2.txt', FILE_USE_INCLUDE_PATH);
                     echo '<div class="three_box" id="three_box">
                              <div class="container">
                                 <div class="row" id="artikeldiv">';
                     $artlist = file_get_html('artikel1.php', true);
                     $artlist2 = file_get_html('artikel2.php', true);
                     foreach($articles as $article) {
                        $i++;
                        $content = file_get_html(rtrim($article), true);
                        $judul = $content->find('#judulart');
                        $isi = $content->find('#konten');
                        if(stripos($judul[0]->plaintext, $searchString) !== false) {
                           $isiart = $artlist->find('#artikel'.$i);
                           echo $isiart[0]->outertext;
                           $k++;
                        } else {
                           if(stripos($isi[0]->plaintext, $searchString) !== false) {
                              $isiart = $artlist->find('#artikel'.$i);
                              echo $isiart[0]->outertext;
                              $k++;
                           }
                        }
                     }
                     foreach($articles2 as $article) {
                        $j++;
                        $content = file_get_html(rtrim($article), true);
                        $judul = $content->find('#judulart');
                        $isi = $content->find('#konten');
                        if(stripos($judul[0]->plaintext, $searchString) !== false) {
                           $isiart = $artlist2->find('#artikel'.$j);
                           echo $isiart[0]->outertext;
                           $k++;
                        } else {
                           if(stripos($isi[0]->plaintext, $searchString) !== false) {
                                 $isiart = $artlist2->find('#artikel'.$j);
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
                     $a = 0; $b = 0;
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
      <script>$('#noresult').hide();</script>
      <script src="../js/custom.js"></script>
   </body>
</html>

