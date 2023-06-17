<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
    session_start();
}
?>
<!-- header -->
<div class="nav-mob">
    <div class="header_bottom">
        <nav class="header_bottom navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand logo-mobile" href="#"><img src="../images/logo.png" alt="#"></a>
            <div class="brand-teks">KSR PMI STIS</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if ($_SESSION['no_page'] == 1) {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="index.php">Beranda</a>
                        <?php if ($_SESSION['no_page'] == 1) {
                        ?>
                            <div class="underline"></div>
                        <?php
                        }; ?>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['no_page'] == 4) {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="pengumuman.php">Pengumuman</a>
                        <?php if ($_SESSION['no_page'] == 4) {
                        ?>
                            <div class="underline"></div>
                        <?php
                        }; ?>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['no_page'] == 2) {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="artikel1.php">Artikel</a>
                        <?php if ($_SESSION['no_page'] == 2) {
                        ?>
                            <div class="underline"></div>
                        <?php
                        }; ?>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['no_page'] == 3) {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                        <?php if ($_SESSION['no_page'] == 3) {
                        ?>
                            <div class="underline"></div>
                        <?php
                        }; ?>
                    </li>
                    <li class="nav-item <?php if ($_SESSION['no_page'] == 5) {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="tentang.php">Tentang</a>
                        <?php if ($_SESSION['no_page'] == 5) {
                        ?>
                            <div class="underline"></div>
                        <?php
                        }; ?>
                    </li>
                </ul>
                <form action="search.php" method="post">
                    <input class="form_sea" type="text" placeholder="Cari artikel atau pengumuman" name="search">
                    <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                </form>
            </div>
            </di>
    </div>
</div>
<div class="nav-pc">
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_bottom d_flex">
                <!-- <div class="row d_flex"> -->
                <!-- </div> -->
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
                                        <li class="nav-item <?php if ($_SESSION['no_page'] == 1) {
                                                                echo 'active';
                                                            } ?>">
                                            <a class="nav-link" href="index.php">Beranda</a>
                                            <?php if ($_SESSION['no_page'] == 1) {
                                            ?>
                                                <div class="underline"></div>
                                            <?php
                                            }; ?>
                                        </li>
                                        <li class="nav-item <?php if ($_SESSION['no_page'] == 4) {
                                                                echo 'active';
                                                            } ?>">
                                            <a class="nav-link" href="pengumuman.php">Pengumuman</a>
                                            <?php if ($_SESSION['no_page'] == 4) {
                                            ?>
                                                <div class="underline"></div>
                                            <?php
                                            }; ?>
                                        </li>
                                        <li class="nav-item <?php if ($_SESSION['no_page'] == 2) {
                                                                echo 'active';
                                                            } ?>">
                                            <a class="nav-link" href="artikel1.php">Artikel</a>
                                            <?php if ($_SESSION['no_page'] == 2) {
                                            ?>
                                                <div class="underline"></div>
                                            <?php
                                            }; ?>
                                        </li>
                                        <li class="nav-item <?php if ($_SESSION['no_page'] == 3) {
                                                                echo 'active';
                                                            } ?>">
                                            <a class="nav-link" href="galeri.php">Galeri</a>
                                            <?php if ($_SESSION['no_page'] == 3) {
                                            ?>
                                                <div class="underline"></div>
                                            <?php
                                            }; ?>
                                        </li>
                                        <li class="nav-item <?php if ($_SESSION['no_page'] == 5) {
                                                                echo 'active';
                                                            } ?>">
                                            <a class="nav-link" href="tentang.php">Tentang</a>
                                            <?php if ($_SESSION['no_page'] == 5) {
                                            ?>
                                                <div class="underline"></div>
                                            <?php
                                            }; ?>
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
</div>
<!-- end header inner -->
<!-- end header -->