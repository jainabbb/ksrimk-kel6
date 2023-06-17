<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_artikel'] = 2;
$_SESSION['judul'] = "Menjaga 'Mindset' Sehat di Tengah Pandemi";
$_SESSION['tanggal'] = "26-02-2021";
ob_start();
?>
<img src="../images/pmi.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" id="daftarartikel" style="padding-left: 0; padding-right: 0;">
   <img src="../images/konten artikel 2.jpg" alt="Logo" width="70%" id="logo" style="margin-left: 0;">
   <h2>Daftar Artikel</h2>
   <a href="konten artikel.php">
      <p>Artikel 1</p>
   </a>
   <a href="konten artikel 2.php">
      <p>Artikel 2</p>
   </a>
   <a href="konten artikel 3.php">
      <p>Artikel 3</p>
   </a>
   <p>Artikel 4</p>
   <p>Artikel 5</p>
   <p>Artikel 6</p>
   <p>Artikel 7</p>
   <p>Artikel 8</p>
   <p>Artikel 9</p>
   <a href="artikel1.php">
      <p>Artikel lainnya...</p>
   </a>
</div>
<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>