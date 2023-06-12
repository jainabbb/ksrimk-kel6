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
      <title>romofyi</title>
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
                                    <a class="nav-link" href="../index.html">Beranda</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../artikel1.html">Artikel</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../galeri.html">Galeri</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../pengumuman.html">Pengumuman</a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="../tentang.html">Tentang</a>
                                    <div class="underline"></div>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="action_page.php">
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
                      <div class="titlepage" id="judulartikel">
                         <h2>Hasil Pencarian</h2>
                      </div>
                   </div>
                </div>
            </div>
            <div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="about">
            <?php
                require('simple_html_dom.php');
                $searchString = $_POST['search'];

                // cari artikel
                $i = 0; $j = 15; $k = 0;
                $articles = file('websites.txt');
                $articles2 = file('websites2.txt');
                echo '<div class="three_box">
                            <div class="container">
                                <div class="row" id="artikeldiv">';
                $artlist = file_get_html('artikel1.html', true);
                $artlist2 = file_get_html('artikel2.html', true);
                foreach($articles as $article) {
                    $i++;
                    $content = file_get_html(rtrim($article), true);
                    $judul = $content->find('#judulartikel');
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
                    $judul = $content->find('#judulartikel');
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
                if ($k == 0) echo 'not found';
                echo '<br>';

                // cari pengumuman
                $html = file_get_html('pengumuman.html', true);
                $pengumuman = $html->find('.daftarp div');
                $pengumumanp = $html->find('.daftarp');
                $i = 0; $j = 0;
                foreach ($pengumuman as $item) {
                    if (stripos($item->plaintext, $searchString) !== false) {
                        echo $pengumumanp[$i]->outertext;
                        $j++;
                    }
                    $i++;
                }
                if ($j == 0) echo "not found";
            ?>
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

