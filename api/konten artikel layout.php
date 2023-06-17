<?php include 'head.php' ?>

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"></div>
      </div> -->
    <?php include 'navbar.php'; ?>
    <div class="banner_main">
        <!-- news section -->
        <div class="news w3-animate-bottom p-3" style="padding: 30px 20px;">
            <div class="container" style="padding-left: 0; padding-right: 0;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage" id="judulartikel">
                            <h2><?= $_SESSION['judul'] ?></h2>
                            <p><?= $_SESSION['tanggal'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row artikel">
                <div class="col-12 col-md-8">
                    <?php
                    echo $htmlContent; ?>
                </div>
                <div class="col-12 col-md-4 upline">
                    <div class="opening m-1" id="daftarartikel" style="padding-left: 0; padding-right: 0;">
                        <h2>Daftar Artikel</h2>
                        <a href="konten artikel.php">
                            <p>Pentingnya "Me Time" Untuk Kesehatan Psikologis</p>
                        </a>
                        <a href="konten artikel 2.php">
                            <p>Menjaga 'Mindset' Sehat di Tengah Pandemi</p>
                        </a>
                        <a href="konten artikel 3.php">
                            <p>Pembelajaran Jarak Jauh Sehat, Bisakah?</p>
                        </a>
                        <p>Gangguan Kesehatan Mental</p>
                        <p>Yuk Kenal Lebih Dekat Dengan COVID-19</p>
                        <p>Tetua Berkata, Budak Bertindak</p>
                        <p>Pola Hidup Mahasiswa Politeknik Statistika STIS 2019</p>
                        <p>Gempa Bumi? Jangan Panik!</p>
                        <p>Save Our Ocean, Plastic Free!</p>
                        <a href="artikel1.php">
                            <p>Artikel lainnya...</p>
                        </a>
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

    <?php include 'footer.php' ?>

</body>

</html>