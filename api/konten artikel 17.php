<?php
if (!(session_status() === PHP_SESSION_ACTIVE)) {
   session_start();
}
$_SESSION['no_page'] = 2;
$_SESSION['no_artikel'] = 17;
$_SESSION['judul'] = "Menjaga 'Mindset' Sehat di Tengah Pandemi";
$_SESSION['tanggal'] = "26-02-2021";

ob_start();
// Menyimpan HTML dalam variabel
?>
<img src="../images/pmi.jpg" alt="Logo" width="100%" height="100%" id="logo" style="margin-left: 0;">
<div class="opening" style="padding-left: 0; padding-right: 0; margin-bottom: 0;" id="konten">
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<?php
$htmlContent = ob_get_clean();

include 'konten artikel layout.php';
?>

